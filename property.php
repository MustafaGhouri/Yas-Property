<?php

include('header.php');

$type = $_GET['type'];
// $selectProperty = mysqli_query($con, "SELECT * FROM `addproperty` WHERE `buy_rent` = '$type'");
$selectProperty = mysqli_query($con, "SELECT property_image.image as prop_image ,addproperty.* FROM `property_image` JOIN addproperty ON property_image.property_id = addproperty.id WHERE addproperty.buy_rent = '$type'  GROUP BY property_id ORDER BY `id` DESC");

?>


<div class="container my-5">
    <div class="row">
        <?php
        if ($row = mysqli_num_rows($selectProperty)) {
            while ($fetchProperty = mysqli_fetch_array($selectProperty)) {
        ?>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 ast">
                    <div class="card">
                        <img class="card-img-top" src="<?= @$url . 'uploads/property/' . $fetchProperty['prop_image'] ?>" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-title">AED <?= @$fetchProperty['property_price'] ?> </p>
                            <h5 class="card-text"><?= @$fetchProperty['name'] ?></h5>
                            <div class="icons my-2">

                            </div>
                            <div class="person ">
                                <div class="three">
                                    <img src="<?= $url . 'uploads/agent/' . $fetchProperty['agent_img'] ?>" class="person-img" alt="">
                                </div>
                                <div class="four">
                                    <i class="bi bi-telephone"></i>
                                    <i class="bi bi-envelope px-4"></i>
                                    <i class="bi bi-whatsapp"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php

            }
        } else {
            ?>
            <h1>Property Not Found</h1>
        <?php
        }
        ?>
    </div>
</div>






<?php
include('footer.php')

?>
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