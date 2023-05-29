<?php
include('include/connection.inc.php');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $select = mysqli_query($con, "SELECT * FROM `addproperty` WHERE `id` = $id");
  if (mysqli_num_rows($select) == 0) {
    echo "<script>window.open('index','_self')</script>";
    exit();
  }
  $fetchProperty = mysqli_fetch_array($select);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=$url?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=$url?>css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="<?=$url?>css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?=$url?>css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?=$url?>css/magnific-popup.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="icon" href="<?=$url?>images/yas-properties-logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<style>
  .swiper {
    width: 100%;
    height: 100%;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .swiper-button-next,
  .swiper-button-prev {
    width: 80px !important;
  }

  .swiper {
    width: 100%;
    height: 300px;
    margin-left: auto;
    margin-right: auto;
  }

  .swiper-slide {
    background-size: cover;
    background-position: center;
  }

  .swiper-slide {
    padding: 5px !important;
  }

  .swiper-slide img {
    border-radius: 15px;
  }

  .mySwiper2 {
    height: 80%;
    width: 100%;
  }

  .swiper-wrapper {
    height: 400px !important;
  }

  /* .swiper-slide-active{
      height: 472px!important;

    } */

  .mySwiper {
    height: 20%;
    box-sizing: border-box;
    padding: 10px 0;
  }

  .mySwiper .swiper-slide {
    width: 25%;
    height: 100%;
    opacity: 0.4;
  }

  .mySwiper .swiper-slide-thumb-active {
    opacity: 1;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .wrappertwo {
    height: 200px !important;
  }

  .div#swiper-wrapper-db4cd7a9fd0b2ba1 {
    height: 200px !important;
  }
</style>

<body>


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
            <a class="nav-link havar f-nv-1" href="<?= $url.'rent'?>">Rent</a>
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
            <a class=" havar btns nav-btn my-2 f-nv" href="<?=$url.'sellyourproperty'?>#">Sell My Property</a>
          </li>
          <li class="nav-item">
            <a class="  havar nav-btn my-2 f-nv" href="<?=$url.'invester'?>">I Am An Invester</a>
          </li>

          <li class="nav-item  ">

            <a class="dropbtn nav-btn my-2 dropdown f-nv">Looking For My Home</a>


          </li>
        </ul>
      </div>




    </div>

  </nav>
  <div class="page-top">
    <h1 class="property-head">Details</h1>

  </div>

  <div class="container mt-5">
    <div class="row desrow">
      <div class="col-md-8 ">
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
          <div class="swiper-wrapper">
            <?php
            $select_images = mysqli_query($con, "SELECT * FROM `property_image` WHERE property_id = $id");
            while ($fetchImage = mysqli_fetch_array($select_images)) { ?>
              <div class="swiper-slide">
                <img src="<?= $url . 'uploads/property/' . $fetchImage['image'] ?>" />
              </div>
            <?php } ?>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div thumbsSlider="" class="swiper mySwiper">
          <div class="swiper-wrapper wrappertwo">
            <?php
            $select_images = mysqli_query($con, "SELECT * FROM `property_image` WHERE property_id = $id");
            while ($fetchImage = mysqli_fetch_array($select_images)) { ?>
              <div class="swiper-slide sliddd">
                <img src="<?= $url . 'uploads/property/' . $fetchImage['image'] ?>" />
              </div>
            <?php } ?>
          </div>
        </div>
        <h2 class="border-bottom text-dark pb-4"><?= $fetchProperty['name'] ?></h2>
        <div class="detail-description">
          <h3 class="des-heading">Description</h3>
 
          <div class="conatiner-fluid icons-ssections">
            <div class="row">
              <div class="col-lg-6 col-md-6 yala">
                <div class="one">
                  <img src="images/town.png" class="color-icons" alt="">
                  <p class=" pari">Property type<br> <?= $fetchProperty['propery_type'] ?></p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 yala">
                <div class="one">
                  <img src="images/bed.png" class="color-icons" alt="">
                  <p class=" pari">Bed<br> <?= $fetchProperty['beds'] ?></p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 mt-3 yala">
                <div class="one">
                  <img src="images/bathroom.png" class="color-icons" alt="">
                  <p class=" pari">Bathroom<br> <?= $fetchProperty['bathroom'] ?></p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 mt-3 yala">

                <div class="one">
                  <img src="images/sqft.png" class="color-icons" alt="">
                  <p class=" pari">Area Sqft<br> <?= $fetchProperty['sq_ft'] ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="pt-4 despara"> <?= base64_decode($fetchProperty['descripton']) ?></p>


        <div class="container-fluid mt-4">
          <h2 class="my-4 d-head">Features</h2>
          <div class="row featurerow">
            <div class="col-lg-4 col-md-12 col-sm-6">
              <div class="f-1 mb-3">
                <img src="images/coolingicon.png" class="mark" alt="">
                <h6>Center Cooling </h6>
              </div>
              <div class="f-2 mb-3">
                <img src="images/fire-Alarmicon.png" class="mark" alt="">
                <h6>Fire Alarm </h6>
              </div>
              <div class="f-3 mb-3">
                <img src="images/heating-icon.png" class="mark" alt="">
                <h6>Heating </h6>
              </div>
              <div class="f-4 mb-3">
                <img src="images/Gymicon.png" class="mark" alt="">
                <h6>Gym </h6>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-6">
              <div class="f-1 mb-3"><img src="images/balconyicon.png" class="mark" alt="">
                <h6>Balcony </h6>
              </div>
              <div class="f-2 mb-3">
                <img src="images/modern-kitchenicon.png" class="mark" alt="">
                <h6>Modern Kitchen </h6>
              </div>
              <div class="f-3 mb-3">
                <img src="images/poolicon.png" class="mark" alt="">
                <h6>Pool </h6>
              </div>
              <div class="f-4 mb-3">
                <img src="images/Elevatoricon.png" class="mark" alt="">
                <h6>Elevator </h6>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-6">
              <div class="f-1 mb-3">
                <img src="images/pet-friendlyicon.png" class="mark" alt="">
                <h6>Pet Friendly </h6>
              </div>
              <div class="f-2 mb-3">
                <img src="images/storageicon.png" class="mark" alt="">
                <h6>Storage </h6>
              </div>
              <div class="f-3 mb-3">
                <img src="images/Laundryicon.png" class="mark" alt="">
                <h6>Laundry </h6>
              </div>
              <div class="f-4 mb-3">
                <img src="images/dishWashericon.png" class="mark" alt="">
                <h6>Dish Washer </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="location mt-5">
          <h2 class="d-head">location : <?= $fetchProperty['location'] ?></h2>
          <div class="location-1">



          </div>
        </div>
      </div>





    </div>
    <div class="col-md-4 desright">
      <div class="detail-video">
        <video src="videos/propertyine.mp4" class="desvideo" autoplay loop muted></video>
      </div>
      <div class="agents-buttons">
        <a href="#" id="contact-agent-link">Contact Agent</a>
        <a href="#" id="request-info-link">Request Info</a>
      </div>
      <div class="agent-card" id="contact-agent">
        <div class="agent-inner-main">
          <div class="agent-img">
            <img src="<?= $url . 'uploads/agent/' . $fetchProperty['agent_img'] ?>" class="agentimage" alt="">
          </div>
          <div class="agent-name">
            <h5 class="listby">Listed By</h5>
            <h3 class="agent-namee"> <?= $fetchProperty['agent_name'] ?></h3>
          </div>
        </div>
        <div class="agent-btns mt-4">
          <a href="tel:<?= $fetchProperty['agent_phone'] ?>" class="agent-buttons">Call</a>
          <a href="mailto:<?= $fetchProperty['agent_phone'] ?>" class="agent-buttons">Email</a>
          <a href="https://wa.me/<?= $fetchProperty['agent_phone'] ?>" class="agent-buttons">Whatsapp</a>
        </div>
      </div>

      <div class="agent-form" id="request-info" style="display:none;">
        <div class="dtai  form-color-1">
          <h3 class="text-center form-heading mt-3">Request For Quote</h3>
          <label for="" class="form-label mt-3">Your Name</label>
          <input type="text" class="form-control">
          <br>
          <label for="" class="form-label">Email Address</label>
          <input type="email" class="form-control">
          <br>
          <label for="" class="form-label">Message</label>
          <input type="email" class="form-control">
          <input type="submit" class="form-control mt-3 form-btn">
        </div>
      </div>
      <h3 class="simi">Similar</h3>
      <?php

      $res = mysqli_query($con, "SELECT property_image.image as prop_image ,addproperty.* FROM `property_image` JOIN addproperty ON property_image.property_id = addproperty.id GROUP BY property_id ORDER BY addproperty.id DESC LIMIT 1");
      while ($row = mysqli_fetch_array($res)) {

      ?>
        <div class="similar">
          <div class="card detailsscardd">
            <img class="card-img-top" src="<?= $url . 'uploads/property/' . $row['prop_image'] ?>" alt="Card image cap">
            <div class="card-body">
              <p class="card-price">AED 259,000</p>
              <div class="card-iconss">
                <div class="bedss">
                  <h4 class="bednumber card-title">5</h4>
                  <img src="images/bed.png" class="card-bed" alt="">


                </div>
                <div class="bath">
                  <h4 class="bednumber card-title">2</h4>
                  <img src="images/bathroom.png" class="card-bed" alt="">


                </div>
                <div class="bath">
                  <h4 class="bednumber card-title">907</h4>
                  <img src="images/sqft.png" class="card-bed" alt="">


                </div>
              </div>
              <div class="iconns-name">
                <div class="icon-name-1">
                  <p class="spec-name">Bed</p>
                </div>
                <div class="icon-name-2">
                  <p class="spec-name1">Bathroom</p>
                </div>
                <div class="icon-name-3">
                  <p class="spec-name">Square ft</p>
                </div>
              </div>



              <a href="<?= $url . 'product-page' ?>" class="throw-p">
                <h5 class="card-text "><?= $row['name'] ?></h5>
              </a>
              <div class="card-location mt-2">
                <img src="images/location.png" class="cardlocation" alt="">
                <p class="card-para">Vera Residences, Business Bay</p>
              </div>
              <div class="icons my-1">

              </div>
              <div class="person ">
                <div class="three">
                  <img src="<?= $url . 'uploads/agent/' . $row['agent_img'] ?>" class="person-img" alt="">
                </div>
                <div class="four">
                  <a href="tel:<?= $row['agent_phone'] ?>"> <i class="bi bi-telephone"></i></a>
                  <a href="mailto:<?= $row['agent_email'] ?>"> <i class="bi bi-envelope px-4"></i></a>
                  <a target="_blank" href="https://wa.me/<?= $row['agent_phone'] ?>"> <i class="bi bi-whatsapp"></i></a>
                </div>
              </div>

            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  </div>











  <?php
include('footer.php')

?>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
<script>
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });
</script>
<script>
  // Get the anchor elements
  const contactAgentLink = document.querySelector('#contact-agent-link');
  const requestInfoLink = document.querySelector('#request-info-link');

  // Get the div elements
  const contactAgentDiv = document.querySelector('#contact-agent');
  const requestInfoDiv = document.querySelector('#request-info');

  // Add event listener to "Request Info" anchor button
  requestInfoLink.addEventListener('click', (event) => {
    event.preventDefault();
    contactAgentDiv.style.display = 'none';
    requestInfoDiv.style.display = 'block';
  });

  // Add event listener to "Contact Agent" anchor button
  contactAgentLink.addEventListener('click', (event) => {
    event.preventDefault();
    requestInfoDiv.style.display = 'none';
    contactAgentDiv.style.display = 'block';
  });
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

</html>