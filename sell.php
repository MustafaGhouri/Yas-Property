<?php include('include/connection.inc.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <link rel="icon" href="<?=$url?>images/yas-properties-logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Sell My Property</title>
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
                     
                 
                    </li></ul></div>
                 
                
              
             
            </div>
        
        </nav>
      </header>
      <div class="contact-main-section">
        <div class="container-fluid contact-container">
          <div class="row raw">
            <div class="col-md-6 contact-main-left">
      <div class="contact-left-inner-content-1">
        <h1 class="contact-main-heading">Sell your property with us</h1>
        <p class="cw">Our team combines their local knowledge and expertise to provide an accurate assessment of your property, all following RICS, IVS and RERA practices and guidelines.</p>
        <p class="cw pt-3">Contact our Sales Specialists to arrange a face-to-face valuation for your property.</p>
        <!-- <h4 class="contact-info pt-4">Office 2101 & 2404, Marina Plaza, Dubai Marina, Dubai,</h4>
        <h4 class="contact-info">PO Box 171418</h4>
        <h4 class="contact-info">+971 (4) 383-1002</h4>
        <h4 class="contact-info">info@Yasproperty.ae</h4> -->
        <div class="contact-buttons pt-4">
          <a href="" class="request-btn">Request For Call</a>

        </div>
      </div>
      
            </div>
            <div class="col-md-6 contact-main-right">
      <img src="images/dacha_946d28b114.webp" class="w-100 contactimg" alt="">
            </div>
          </div>
        </div>
      </div>


      <div class="who-we-are-onee">
        <div class="who-main">
        <h2 class="who text-center">Step by Step</h2>     
      </div>
      </div>
      <div class="step-main ">
        <div class="container">
            <div class="row">
                <div class="col-md-3 step-card">
                  <img src="images/stepbystepimageone.png" class="stepicon"  alt="">
                  <h3 class="stepheading-card">Property Valuation</h3>
                  <p>Your agent will visit the property and provide you with the market analysis based on recent transactions.</p>
                </div>
                <div class="col-md-3 step-card">
                  <img src="images/stepbystepimagetwo.png" class="stepicon" alt="">

<h3 class="stepheading-card">Marketing</h3>
<p>Our marketing team will create a professional advertisement with HD photo/ video of your property and will promote in on various channels</p>
                </div>
                <div class="col-md-3 step-card">
                  <img src="images/stepbystepimagethree.png" class="stepicon" alt="">

<h3 class="stepheading-card">Offer agreed</h3>
<p>Your agent will conduct viewing at the property with prospective buyers until the offer is agreed</p>
                </div>
                <div class="col-md-3 step-card">
                  <img src="images/stepbystepimagefour.png" class="stepicon" alt="">

<h3 class="stepheading-card">Transfer of ownership</h3> 
<p>Your agent will take care of all related paperwork and the final transfer of the property at Dubai Land Department</p>
               </div>
            </div>
        </div>
      </div>




      <div class="whychose-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
            <div class="whychooseheading">
              <h2 class="Choseyas my-3">Why Choose Yas Property?</h2>
                <p>Since 2004, Yas Properties has been a market leader in Dubai real estate. Our experienced agents will provide you with first class service and utmost dedication to achieve the best results for the sale of your property. </p>
            </div>

            </div>
            <div class="col-md-6">
<img src="images/whyhchoosesection.jpg" class="w-100" alt="">
            </div>
          </div>
        </div>
      </div>


      <div class="testimonial-sec">

        <h3 class="text-center testi-btn mt-5" >Clients feedback</h3>
      
      <section class="home-testimonial">
       
        <div class="container-fluid">
          
            <div class="row d-flex justify-content-center testimonial-pos">
                <div class="col-md-12  d-flex justify-content-center">
                 
                    <h3>Testimonials</h3>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                  
                </div>
            </div>
            <section class="home-testimonial-bottom">
                <div class="container testimonial-inner">
                    <div class="row d-flex justify-content-center">
                        <div class=" col-lg-4 col-sm-12 col-md-12 style-3">
                            <div class="tour-item ">
                                <div class="tour-desc bg-white">
                                    <div class="tour-text color-grey-3 text-center">&ldquo;At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.&rdquo;</div>
                                    <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg" alt=""></div>
                                    <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                    <div class="link-position d-flex justify-content-center">Student</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-md-12  style-3">
                            <div class="tour-item ">
                                <div class="tour-desc bg-white">
                                    <div class="tour-text color-grey-3 text-center">&ldquo;At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.&rdquo;</div>
                                    <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                    <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                    <div class="link-position d-flex justify-content-center">Student</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-md-12  style-3">
                            <div class="tour-item ">
                                <div class="tour-desc bg-white">
                                    <div class="tour-text color-grey-3 text-center">&ldquo;At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.&rdquo;</div>
                                    <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                    <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                    <div class="link-position d-flex justify-content-center">Student</div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
      </section>
      </div>





<div class="center-rounded-main">
  <div class="container rounded-section">
    <div class="row">
      <div class="col-md-12 center-content-main">
        <div class="center-content">
<h1 class="cw text-center">Ready to sell your property with Yas Properties?
</h1>

        </div>
        <div class="center-btn">
          <a href="" class="btn-1">Request Valuation</a>
          <a href="" class="btn-2">Request a Call Back</a>
        </div>

      </div>
    </div>
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



</body>

</html>