<?php

include('top.php');

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $selectProp = mysqli_query($con, "SELECT * FROM `addproperty` WHERE `id` = $id");
    $fetchProp = mysqli_fetch_array($selectProp);

    $select_images = mysqli_query($con, "SELECT * FROM `property_image` WHERE property_id = $id");
}

?>
<div class="modal fade" id="delete-image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sure! you want to delete property image?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
        <img src="" id="mdlImg" style="width: 100%;max-width: 400px;margin: 0 auto; display: block; ">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger sure-dlt" >Delete</button>
      </div>
    </div>
  </div>
</div>



<div class="add-property-form mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card px-3">
                    <h2 class="text-center mt-3"><?= isset($_GET['edit']) ? 'Update' : 'Add' ?> Property Cards</h2>
                    <form id="<?= isset($_GET['edit']) ? 'update' : 'add' ?>" enctype="multipart/form-data">
                        <div id="alert"></div>
                        <input type="hidden" id="updateid" name="id" value="<?= @$id ?>">
                        <input type="hidden" id="page" value="property">
                        <div class="card-body card-block row">
                            <div class="form-group col-md-4 m-0 px-1">
                                <label class="form-control-label">Property Name</label>
                                <input type="text" name="propertyname" value="<?= @$fetchProp['name'] ?>" required class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-control-label">Property Price</label>
                                <input type="text" name="propertyprice" value="<?= @$fetchProp['property_price'] ?>" required class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-control-label">Property Type</label>
                                <select name="properyType" required class="form-control">
                                    <?php
                                    $selectType = mysqli_query($con, "SELECT * FROM `property_types` ORDER BY `id` DESC");
                                    while ($res = mysqli_fetch_array($selectType)) {
                                    ?>
                                        <option <?= @$fetchProp['propery_type'] == $res['name'] ? 'selected' : '' ?> value="<?= $res['name'] ?>"> <?= $res['name'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-control-label">Rooms</label>
                                <input type="number" value="<?= @$fetchProp['rooms'] ?>" name="rooms" id="rooms" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-control-label">Beds</label>
                                <input type="number" value="<?= @$fetchProp['beds'] ?>" name="beds" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-control-label">Bathroom</label>
                                <input type="number" value="<?= @$fetchProp['bathroom'] ?>" name="bathroom" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-control-label">Square ft</label>
                                <input type="number" value="<?= @$fetchProp['sq_ft'] ?>" name="sq_ft" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-control-label">Location</label>
                                <input type="text" value="<?= @$fetchProp['location'] ?>" name="location" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-control-label">Buy/Rent</label>
                                <select name="buy_rent" class="form-control">
                                    <option <?= @$fetchProp['buy_rent'] == 'Buy' ? 'selected' : '' ?> value="Buy">Buy</option>
                                    <option <?= @$fetchProp['buy_rent'] == 'Rent' ? 'selected' : '' ?> value="Rent">Rent</option>
                                    <option <?= @$fetchProp['buy_rent'] == 'Off-Plan' ? 'selected' : '' ?> value="Off-Plan">Off-Plan</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label class="form-control-label">Agent Image</label>
                                <input type="file" name="agentimage" id="agentimage" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-control-label">Agent Name</label>
                                <input type="text" name="agentname" value="<?= @$fetchProp['agent_name'] ?>" required class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-control-label">Agent Phone</label>
                                <input type="text" name="agent_phone" value="<?= @$fetchProp['agent_phone'] ?>" required class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-control-label">Agent Email</label>
                                <input type="text" name="agent_email" value="<?= @$fetchProp['agent_email'] ?>" required class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label class="form-control-label">Description</label>
                                <textarea name="description" cols="30" rows="5" id="mytextareaa" class="form-control" required><?= base64_decode(@$fetchProp['descripton'])?></textarea>
                            </div>
                            <div class="form-group col-md-12 d-">
                                <label for="inputPassword4">Select Multi Images</label>
                                <div class="multi-img">
                                    <input type="file" class="img" multiple id="gallery-photo-add" name="gallery[]" placeholder="" class="form-control">

                                    <div class="gallery row d-flex"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <?php
                                if (isset($_GET['edit'])) { ?>
                                    <button name="Updateproperty" type="submit" onclick="tinyMCE.triggerSave(true,true);" class="btn  btn-info">
                                        <span>Update Poperty</span>
                                    </button>
                                <?php } else { ?>
                                    <button name="Addproperty" type="submit" onclick="tinyMCE.triggerSave(true,true);" class="btn  btn-primary  ">
                                        <span>Add Poperty</span>

                                    </button>
                                <?php } ?>
                            </div>
                        </div>
                    </form>
                    <div class="update-image">
                        <?php
                        if (isset($_GET['edit'])) {
                            while ($fetchImage = mysqli_fetch_array($select_images)) { ?>
                                <div class="img-item">
                                    <span class="delete-img" id="<?= $fetchImage['id'] ?>"> &times;</span>
                                    <img class="updateimg" src="<?= $url . 'uploads/property/' . $fetchImage['image'] ?>" id="prop-<?= $fetchImage['id'] ?>" alt="">
                                </div>
                        <?php }
                        } ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php

?>
<?php include('footer.php'); ?>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<script>
    $(document).on('click', '.close', function() {
        $('.alert').fadeOut();
    })

    $(function() {
        // Remove image preview element
        $(document).on("click", ".remove-img", function(e) {
            e.preventDefault();
            $(this).parent().fadeOut(500, function() {
                $(this).remove();
            });
        })

        // Render image previews
        var renderImagePreview = function(input, placeToInsertImagePreview) {
            if (input.files) {
                var filesAmount = input.files.length;

                for (var i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $($.parseHTML(`<img src="${event.target.result}">`)).appendTo(placeToInsertImagePreview);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };

        // Update image previews when user selects files
        $('#gallery-photo-add').on('change', function() {
            var placeToInsertImagePreview = $('div.gallery');
            placeToInsertImagePreview.html('');
            renderImagePreview(this, placeToInsertImagePreview);
        });
    });
</script>