<?php include('top.php'); ?>


<?php
$pagename = "Playlist Video";
if (isset($_GET['cate_id'])) {

    $cate_id = base64_decode($_GET['cate_id']);
} else {
    $cate_id = 0;
}
if (isset($_GET["edit"])) {
    $edit = base64_decode($_GET["edit"]);
    $query = mysqli_query($con, "SELECT * FROM `playlist` where `id` = '$edit'");
    $fetch = mysqli_fetch_array($query);
}

if (isset($_POST['addVideo'])) {
    $title = base64_encode($_POST['title']);
    $image = htmlspecialchars($_POST['yt_img']); 
    $embed = $_POST['embed'];
    $url = htmlspecialchars($_POST['url']);
    $short_title = $_POST['short_title'];
    $status = htmlspecialchars($_POST['status']);
 
    // Step 3 - Create SQL query
    $query = "INSERT INTO `playlist`(`title`, `url`,`short_title`,`yt_img`, `embed`, `status`) VALUES ('$title','$url','$short_title','$image','$embed','$status' )";
    // Step 4 - Execute SQL query
    $result = mysqli_query($con, $query);

    // Step 5 - Check if query executed successfully
    if ($result) {
        // Step 6 - Output success message
        echo "<p class='text-success'>Video Successfully Inserted</p>";
    } else {
        // Step 7 - Output error message
        echo "<p class='text-danger'>Error</p>";
    }
}
?>
<style>
    .user_profile_add input {
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        z-index: 999;
        opacity: 0;
    }

    .user_profile_add img {
        width: 100%;
        object-fit: cover;
    }

    .user_profile_add {
        width: 400px;
        overflow: hidden;
        height: 280px;
        position: relative;
        margin: 0 auto;
    }
</style>
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">

                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h2 class="text-center mt-3">Add Properties Video </h2>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area ">
                    <div id="alert"></div>
                    <form method="post" class="p-5" action='uploadvideo.php' enctype="multipart/form-data">
                        <input type="hidden" id="page" value="playlist">
                        <input type="hidden" name="id" value="<?= @$fetch['id'] ?>">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group" id="youtubeThumbnail">
                                    <label for="yt-thumb-input" class="d-block"> Youtube video thumbnail
                                    </label>
                                    <input type="text" id="yt-thumb-input" name="url" class="field form-control" value="<?= @$fetch['yt_img'] ?>" placeholder="Enter Url">
                                    <div class="d-flex">
                                        <?php
                                        if (isset($_GET['edit'])) {
                                            if ($fetch['yt_img'] != "") { ?>
                                                <img style="margin:30px auto ;" src="<?= $fetch['yt_img'] ?>" class="thumb video-link-img" alt="thumbnail">

                                            <?php    } else { ?>
                                                <img style="margin:30px auto ;" src="<?= $url . 'uploads/videos/thumbnail.png' ?>" class="thumb video-link-img" alt="thumbnail">

                                            <?php  }
                                        } else { ?>

                                            <img style="margin:30px auto ;" src="<?= $url . 'uploads/videos/thumbnail.png' ?>" class="thumb video-link-img" alt="thumbnail">

                                        <?php  } ?>

                                        <input type="hidden" class="hiddenthumb" value="<?= @$fetch['yt_img'] ?>" name="yt_img">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title" class="">Title</label>
                                    <input id="title" type="text" name="title" value="<?= base64_decode(@$fetch['title']) ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="short_title" class="">Short Title</label>
                                    <input id="short_title" type="text" name="short_title" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="embed" class="">Embed</label>
                                    <textarea name="embed" cols="10" rows="5" class="form-control"><?= @$fetch['embed']  ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status" class="">Status</label>
                                    <select id="status" name="status" class="form-control">
                                        <option value="0" <?= (@$fetch['status'] == 0 ? 'selected' : '')  ?>>Inactive</option>
                                        <option value="1" <?= (@$fetch['status'] == 1 ? 'selected' : '')  ?>>Active</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <input type="submit" name="addVideo" class="mt-4 btn btn-primary" value="Upload Video">
                    </form>
                </div>
            </div>
        </div>






        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <?php include('footer.php'); ?>
        <script>
            const inputUrl = document.querySelector('.field');
            let thumb = document.querySelector('.thumb')


            inputUrl.onkeyup = () => {
                let url = inputUrl.value;


                const pattern1 = 'https://www.youtube.com/watch?v='
                const pattern2 = 'https://youtube.com/watch?v='
                const pattern3 = 'https://youtu.be/'
                const pattern4 = 'https://www.youtu.be/'

                if (url.indexOf(pattern1) != -1 || url.indexOf(pattern2) != -1) {
                    let valid = url.split('watch?v=')[1].substring(0, 11);
                    var imageThumb = `https://img.youtube.com/vi/${valid}/hqdefault.jpg`;
                    thumb.src = imageThumb;
                    $('.hiddenthumb').val(imageThumb);

                }

            }

            // $("#yt-thumb-input").change(function() {
            //     var videoUrl = $(this).val();
            //     var i, image_url, isValidURL, isVValidURL, isEmbValidURL, isShortValidURL, isShortVimeoURL, uniqueIdLength, uniqueID, thumbnail_src;
            //     uniqueIdLength = 11;
            //     image_url = videoUrl;
            //     isValidURL = image_url.indexOf("youtube.com/watch?v=");
            //     isVValidURL = image_url.indexOf("youtube.com/v/");
            //     isEmbValidURL = image_url.indexOf("youtube.com/embed/");
            //     isShortValidURL = image_url.indexOf("youtu.be/");

            //     if (isValidURL == -1 && isVValidURL == -1 && isEmbValidURL == -1 && isShortValidURL == -1) {
            //         return false;
            //     }

            //     if (isValidURL != -1) {
            //         i = image_url.indexOf("v=");
            //     } else if (isVValidURL != -1) {
            //         i = image_url.indexOf("v/");
            //     } else if (isEmbValidURL != -1) {
            //         i = image_url.indexOf("embed/");
            //         i = i + 4;
            //     } else if (isShortValidURL != -1) {
            //         i = image_url.indexOf("youtu.be/");
            //         i = i + 7;
            //     }
            //     i = i + 2;

            //     uniqueID = image_url.substr(i, uniqueIdLength);
            //     imageURL = 'https://img.youtube.com/embed/' + uniqueID + '/maxresdefault.jpg';

            //     $(".video-link-img").attr("src", imageURL);

            //     return false;
            // })
        </script>