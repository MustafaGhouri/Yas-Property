<?php include('include/connection.inc.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" href="images/yas-properties-logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="css/nav.css">
    <title>Mortgage</title>
</head>
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
                   
               
                  </li></ul></div>
               
              
            
           
          </div>
      
      </nav>
    
<div class="mortgage-banner-main">
    <div class="container">
        <div class="row ">
            <div class="col-md-6 mortgage-row">
                <div class="mortgage-left">
<h2 class="mortgage-heading">Mortgage</h2>
<p class="mortgage-para pt-2">We work under official agreements with major UAE banks such as EmiratesNBD, First Abu Dhabi Bank, RAK Bank, Commercial Bank of Dubai, Dubai Islamic Bank, and many others.
    All employees of our credit department have extensive financial education backgrounds and experience working in UAE banks for at least 5 years. Knowing the local banking system from the inside allows us to present each client’s application to the bank in the most favorable light and with a complete package of supporting documents.</p>
</div>
            </div>
            <div class="col-md-6">
<div class="mortgage-form">
    <div class="mortgage-form-main">
<h4 class="mortgage-form-heading">Leave a Request</h4>
<div class="mortgage-form-input">
<input type="text" class="inn mt-4" placeholder="Name">
<input type="email" class="mt-3 inn" placeholder="Phone">
<input type="email" class="mt-3 inn" placeholder="Email">
<input type="submit" class="mortgage-input-btn" name="" id="">

</div>
    </div>
    
</div>
            </div>
        </div>
    </div>
</div>

<div class="who-we-are">
    <div class="who-main">
    <h2 class="who text-center">Who We Are</h2>
    <p class="text-center">We are a team of highly experienced mortgage brokers who are happy to help you with everything you need to know when you are looking to purchase your first home or investment property.</p>
</div>
</div>
<div class="who-cards mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3 whoewe-cards">
                <div class="whowe-inner">
                  <div class="whowe-icon-main">
                    <img src="images/price-down.png" class="whoprice" alt="">
                    <h5 class="text-center card-heading" >Processing Fee <br> Discounts</h5>
                  </div>
                </div>

            </div>
            <div class="col-md-3 whoewe-cards">
              <div class="whowe-inner">
                <div class="whowe-icon-main">
                  <img src="images/business-and-finance.png" class="whoprice" alt="">
                  <h5 class="text-center card-heading" >Exclusive Rates</h5>
                </div>
              </div>
            </div>
            <div class="col-md-3 whoewe-cards">
              <div class="whowe-inner">
                <div class="whowe-icon-main">
                  <img src="images/big-data.png" class="whoprice" alt="">
                  <h5 class="text-center card-heading" >Free Evaluation  Discounted Evaluation</h5>
                </div>
              </div>

            </div>
            <div class="col-md-3 whoewe-cards">
              <div class="whowe-inner">
                <div class="whowe-icon-main">
                  <img src="images/crown.png" class="whoprice" alt="">
                  <h5 class="text-center card-heading" >VIP Service</h5>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>


<div class="who-we-are">
  <div class="who-main">
  <h2 class="who text-center">Summary of Services</h2>
  <h6 class="text-center">We Offer for Future Landlords</h6>

</div>
</div>

<div class="service-card-main">
  <div class="container">
    <div class="row">
    <div class="col-md-4 service-card">
      <div class="service-inner-2">
        <div class="service-icon">
          <img src="images/home.png" class="home" alt="">
        </div>
        <div class="service-title">
     <h4>
      <b>New Mortgage

      </b>
     </h4>
<p>For Buying New Property</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 service-card">
      <div class="service-inner-1">
        <div class="service-icon">
          <img src="images/handshake.png" class="home" alt="">
        </div>
        <div class="service-title">
     <h4>
      <b>Cashout

      </b>
     </h4>
<p>On Fully Paid Property</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 service-card">
      <div class="service-inner">
        <div class="service-icon">
          <img src="images/real-estate.png" class="home" alt="">
        </div>
        <div class="service-title">
     <h4>
      <b>
        Buyout

      </b>
     </h4>
<p>From Existing to New Bank</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-md-4 service-card">
      <div class="service-inner-2">
        <div class="service-icon">
          <img src="images/construction.png" class="home" alt="">
        </div>
        <div class="service-title">
     <h4>
      <b>
        Construction Finance

      </b>
     </h4>
<p>Construction Loan for Building a Dream House

</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 service-card">
      <div class="service-inner-1">
        <div class="service-icon">
          <img src="images/land.png" class="home" alt="">
        </div>
        <div class="service-title">
     <h4>
      <b>Land Finance



      </b>
     </h4>
<p>Buy Residential or Commercial Land

</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 service-card">
      <div class="service-inner">
        <div class="service-icon">
          <img src="images/real-estate.png" class="home" alt="">
        </div>
        <div class="service-title">
     <h4>
      <b>
        
Real Estate in The UAE
      </b>
     </h4>
<p>Apartments, Villas and Commercial</p>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
<?php
include('footer.php')

?>
</body>
<script src="index.js"></script>
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