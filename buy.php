<?php include('include/connection.inc.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="icon" href="images/yas-properties-logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=$url?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=$url?>css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="<?=$url?>css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?=$url?>css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?=$url?>css/magnific-popup.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="css/style.css" />
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
            <a class=" havar btns nav-btn my-2 f-nv" href="<?=$url.'sellyourproperty'?>">Sell My Property</a>
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
 
  <!-- Seach bar widget -->
  <div class="property-finder-main buysearch shadow ">

    <form class="property-finder-fr1 flex-wrap pt-4" action="<?= $url . 'property-grid' ?>">

      <div class="d-flex gap-2 mb-4 mt-5 w-100 d-none">
        <div class=" ">
          <label class="yashwale-btn" for="rent-yas">Rent
            <input type="radio" name="yasproptype" class="d-none" checked id="rent-yas" value="Rent">
          </label>
        </div>
        <div class=" ">

          <label class="yashwale-btn" for="buy-yas">Buy
            <input type="radio" name="yasproptype" class="d-none" id="buy-yas" value="Buy">
          </label>
        </div>
      </div>
      <div class="search-box-new">

        <input class="nav-link  main-search-bar form-control" value="" placeholder="Property Name or Location " name="search">

      </div>
      <div class="drp-1">
        <select class="search-control required" name='property_type' id='property_type'>
          <option value="any">Property Type</option>
          <option value="Apartment">Apartment</option>
          <option value="Villa">Villa</option>
          <option value="TownHouse">TownHouse</option>
          <option value="Commercial">Commercial</option>

        </select>
      </div>

      <select class="cus-drop" name='rooms' id='rooms'>
        <option value="any">Rooms</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
      <select class="cus-drop" name='price' id='yasprice'>
        <option value="any">Price</option>
        <option value="20000">20,000</option>
        <option value="30000">30,000</option>
        <option value="40000">40,000</option>
        <option value="50000">50,000</option>
        <option value="60000">60,000</option>
      </select>


      <button type="submit" name="filterProperty" class="search-icon-new">
        <i class="bi bi-search"></i>
      </button>
    </form>

  </div>
  <!-- Seach bar widget -->
  <section>
    <div class="container my-5">
      <div class="row justify-content-start">
        <?php

        $res = mysqli_query($con, "SELECT property_image.image as prop_image ,addproperty.* FROM `property_image` JOIN addproperty ON property_image.property_id = addproperty.id WHERE addproperty.buy_rent = 'Buy'  GROUP BY property_id ORDER BY `id` DESC");
        while ($row = mysqli_fetch_array($res)) {

        ?>

          <div class="col-lg-4 col-md-3 col-sm-3  col-xs-6 mb-3 ast">
            <div class="card">
              <img class="card-img-top" src="<?= $url . 'uploads/property/' . $row['prop_image'] ?>" alt="Card image cap">
              <div class="card-body">
                <div class="d-flex justify-content-between  flex-wrap w-100">
                  <p class="card-price">AED <?= $row['property_price'] ?></p>
                  <p class="card-price"> <?= $row['propery_type'] ?></p>
                </div>
                <div class="card-iconss">
                  <div class="bedss">
                    <h4 class="bednumber card-title"><?= $row['beds'] ?></h4>
                    <img src="" class="card-bed fa fa-bed-front fa-solid fa-bed mt-1" style="color: #e9cd1c;" alt="">
                  </div>
                  <div class="bath">
                    <h4 class="bednumber card-title"><?= $row['bathroom'] ?></h4>
                    <img src="" class="card-bed fa-sharp fa-solid fa-bath mt-1" style="color: #e9cd1c;" alt="">
                  </div>
                  <div class="bath">
                    <h4 class="bednumber card-title"><?= $row['sq_ft'] ?></h4>
                    <img src="" class="card-bed fa-solid fa-square mt-1" style="color: #e9cd1c;" alt="">
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
                <a href="<?= $url . 'product-page?id=' . $row['id'] ?>" class="throw-p">
                  <h5 class="card-text "><?= $row['name'] ?></h5>
                </a>
                <div class="card-location mt-2">
                  <img src="images/location.png" class="cardlocation" alt="">
                  <p class="card-para"><?= $row['location'] ?></p>
                </div>
                <div class="icons my-1">

                </div>
                <div class="person ">
                  <div class="three">
                    <img src="<?php echo $url . 'uploads/agent/' . $row['agent_img'] ?>" class="person-img" alt="">
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
  </section>



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


  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
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