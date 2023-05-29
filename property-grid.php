<?php

include 'include/connection.inc.php';
$val = $_GET['search'];
$yasproptype = $_GET['yasproptype'];
$property_type = $_GET['property_type'];
$rooms = $_GET['rooms'];
$price = $_GET['price'];

if ($property_type != 'any') {
  $clause = "addproperty.propery_type = '" . $property_type . "'  AND ";
} else {
  $clause = '';
}
if ($rooms != 'any') {
  $clause1 = "addproperty.rooms = '" . $rooms . "'  AND ";
} else {
  $clause1 = '';
}
if ($price != 'any') {
  $clause2 = "addproperty.property_price = '" . $price . "'  AND ";
} else {
  $clause2 = '';
}
if ($val == '' || empty($val)) {
  exit();
}

$res = mysqli_query($con, "SELECT property_image.image as prop_image ,addproperty.* FROM `property_image` JOIN addproperty ON property_image.property_id = addproperty.id  WHERE $clause1 $clause $clause2  addproperty.buy_rent =  '$yasproptype' AND addproperty.location LIKE '%$val%'  OR  $clause1 $clause $clause2  addproperty.buy_rent =  '$yasproptype' AND addproperty.name LIKE '%$val%' GROUP BY property_id ORDER BY `id` DESC");


?>
<!doctype html>
<html lang="en">

<head>
  <title>Property Details</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


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


        </div>

        </li>
        </ul>

      </div>

    </nav>
  </header>
  <div class="page-top">

    <h1 class="property-head">Property <p style="font-size:22px; margin-top:20px">Search for: <?= $val ?></p>
    </h1>


  </div>

  <div class="property-finder-main shadow mt-5">

    <form class="property-finder-fr1 flex-wrap" action="<?= $url . 'property-grid' ?>">

      <div class="d-flex gap-2 mb-4 mt-5 w-100">
        <div class=" ">
          <label class="yashwale-btn" for="rent-yas">Rent
            <input type="radio" name="yasproptype" <?= $yasproptype == 'Rent' ? 'checked' : '' ?> class="d-none" id="rent-yas" value="Rent">
          </label>
        </div>
        <div class=" ">

          <label class="yashwale-btn" for="buy-yas">Buy
            <input type="radio" name="yasproptype" class="d-none" <?= $yasproptype == 'Buy' ? 'checked' : '' ?> id="buy-yas" value="Buy">
          </label>
        </div>
      </div>
      <div class="search-box-new">

        <input class=" nav-link  main-search-bar form-control" value="<?= $val ?>" placeholder="Property Name or Location " name="search">

      </div>

      <div class="drp-1">
        <select class="search-control required" name='property_type' id='property_type'>
          <option value="any" <?= $property_type == 'any' ? 'selected' : '' ?>>Property Type</option>
          <option value="Apartment" <?= $property_type == 'Apartment' ? 'selected' : '' ?>>Apartment</option>
          <option value="Villa" <?= $property_type == 'Villa' ? 'selected' : '' ?>>Villa</option>
          <option value="TownHouse" <?= $property_type == 'TownHouse' ? 'selected' : '' ?>>TownHouse</option>
          <option value="Commercial" <?= $property_type == 'Commercial' ? 'selected' : '' ?>>Commercial</option>

        </select>
      </div>

      <select class="cus-drop" name='rooms' id='rooms'>
        <option value="any" <?= $rooms == 'any' ? 'selected' : '' ?>>Rooms</option>
        <option value="1" <?= $rooms == '1' ? 'selected' : '' ?>>1</option>
        <option value="2" <?= $rooms == '2' ? 'selected' : '' ?>>2</option>
        <option value="3" <?= $rooms == '3' ? 'selected' : '' ?>>3</option>
        <option value="4" <?= $rooms == '4' ? 'selected' : '' ?>>4</option>
        <option value="5" <?= $rooms == '5' ? 'selected' : '' ?>>5</option>
      </select>
      <select class="cus-drop" name='price' id='yasprice'>
        <option value="any" <?= $price == 'any' ? 'selected' : '' ?>>Price</option>
        <option value="20000" <?= $price == '20000' ? 'selected' : '' ?>>20,000</option>
        <option value="30000" <?= $price == '30000' ? 'selected' : '' ?>>30,000</option>
        <option value="40000" <?= $price == '40000' ? 'selected' : '' ?>>40,000</option>
        <option value="50000" <?= $price == '50000' ? 'selected' : '' ?>>50,000</option>
        <option value="60000" <?= $price == '60000' ? 'selected' : '' ?>>60,000</option>
        <option value="70000" <?= $price == '70000' ? 'selected' : '' ?>>70,000</option>
        <option value="80000" <?= $price == '80000' ? 'selected' : '' ?>>80,000</option>
        <option value="90000" <?= $price == '90000' ? 'selected' : '' ?>>90,000</option>
        <option value="100000" <?= $price == '100000' ? 'selected' : '' ?>>100,000</option>
        <option value="200000" <?= $price == '200000' ? 'selected' : '' ?>>200,000</option>
        <option value="300000" <?= $price == '300000' ? 'selected' : '' ?>>300,000</option>
        <option value="400000" <?= $price == '400000' ? 'selected' : '' ?>>400,000</option>
      </select>


      <button type="submit" name="filterProperty" class="search-icon-new">
        <i class="bi bi-search"></i>
      </button>
    </form>

  </div>
  <h1 class="text-center my-5 prop-grid-heading">
    Properties For <?= $yasproptype . ' | ' . $val ?>
  </h1>


  <div class="container my-5">
    <div class="row justify-content-start">
      <?php
      if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_array($res)) {
          if ($row['buy_rent'] == $yasproptype) {
      ?>

            <div class="col-lg-4 col-md-3 col-sm-3  col-xs-6 mb-3 ast">
              <div class="card">
                <img class="card-img-top" src="<?= $url . 'uploads/property/' . $row['prop_image'] ?>" alt="Card image cap">
                <div class="card-body">

                  <div class="d-flex justify-content-between  flex-wrap w-100">
                    <p class="card-price">AED <?= $row['property_price']  ?></p>
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
                    <h5 class="card-text "><?php echo $row['name'] ?></h5>
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
        <?php }
        }
      } else { ?>
        <h2 class="text-center">No Record Found </h2>
      <?php } ?>

    </div>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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