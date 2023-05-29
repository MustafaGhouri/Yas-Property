<?php include('include/connection.inc.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <title>Videos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="icon" href="images/yas-properties-logo.png">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid ">
                <a class="navbar-brand oracle-logo " href="<?= $url ?>"><img src="images/yas-properties-logo.png" alt=" " style="width: 150px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>

                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link  havar f-nv-1" aria-current="page" href="<?= $url.'buy'?>">Buy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link havar f-nv-1" href=""<?= $url.'rent'?>>Rent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link havar f-nv-1" href="<?= $url.'mortgage'?>">Mortgage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link havar f-nv-1" href="<?= $url.'contactus'?>">Contact Us </a>
                        </li>
                        <li class="nav-item">
                            <a class=" havar btns nav-btn my-2 f-nv" href="<?=$url.'rentyourproperty'?>">Rent My Property</a>
                        </li>

                        <li class="nav-item">
                            <a class=" havar btns nav-btn my-2 f-nv" href="<?=$url.'sellyourproperty'?>">Sell My Property</a>
                        </li>
                        <li class="nav-item">
                            <a class="  havar nav-btn my-2 f-nv" href="<?=$url.'invester'?>">I Am An Invester</a>
                        </li>

                        <li class="nav-item  ">

                            <a class="dropbtn nav-btn my-2 dropdown f-nv">Looking For My Home</a>


                </div>

                </li>
                </ul>

            </div>

        </nav>
    </header>
    <div class="page-top">
        <h1 class="property-head">All Video About Properties</h1>

    </div>
    <div class="container about-first">
    <?php
        $selectPlaylist = mysqli_query($con, "SELECT * FROM `playlist` ORDER BY `id` DESC ");
        while ($fetchPlaylisy = mysqli_fetch_array($selectPlaylist)) {

        ?>
        <div class="row">
       
        <div class="col-lg-4 ">
      
          <div class="frontvideo">
            <?= $fetchPlaylisy['embed'] ?>
          </div>
            </div>
            <div class="col-lg-8 about-right">
                <div class="content">
                    <h5 class="about-head">About Videos</h5>
                    <h1 class="About-main-head"><?= base64_decode($fetchPlaylisy['title']) ?></h1>
                    <p><?= $fetchPlaylisy['short_title']?></p>
                </div>
            </div>
        </div>
        <?php }?>

    </div>




 


    <?php
include('footer.php')

?>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">...</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>

<footer>
    <!-- place footer here -->
</footer>


<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
<script>
    window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.navbar');

    if (window.pageYOffset > navbar.offsetTop + navbar.offsetHeight) {
      navbar.classList.add('fixed-navbar');
    } else {
      navbar.classList.remove('fixed-navbar');
    }
  });
</script>
</body>

</html>