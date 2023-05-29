
<?php include('include/connection.inc.php');?>
<!doctype html>
<html lang="en">

<head>
  <title>Yas Properties</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
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
  <div id="floating-buttons">

    <a href="https://wa.me/971505550969" id="whatsapp-button">
      <i class="bi bi-whatsapp sec-whatsapp"></i>
    </a>
    <a href="tel:+971 4 5876394" id="call-button">
      <i class="fa fa-phone"></i>
    </a>
  </div>

  <!-- <header>
    place navbar here
  </header> -->
  <div class="sec-banner">
  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid ">
      <a class="navbar-brand oracle-logo " href="<?= $url ?>"><img src="images/yas-properties-logo.png" alt=" " style="width: 150px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link  havar f-nv-1" aria-current="page" href="<?=$url.'buy'?>">Buy</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link havar f-nv-1" href="<?=$url.'rent'?>">Rent</a>
          </li>
          <li class="nav-item">
            <a class="nav-link havar f-nv-1" href="<?=$url.'mortgage'?>">Mortgage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link havar f-nv-1" href="<?=$url.'contactus'?>">Contact Us </a>
          </li>
          <li class="nav-item">
            <a class=" havar btns nav-btn my-2 f-nv" href="<?=$url.'rentyourproperty'?>">Rent My Property</a>
          </li>
          
          <li class="nav-item">
            <a class=" havar btns nav-btn my-2 f-nv" href="<?=$url.'sellyourproperty'?>">Sell My Property</a>
          </li>
          <li class="nav-item">
            <a class="  havar nav-btn my-2 f-nv" href="<?=$url.'inverter'?>">I Am An Invester</a>
          </li>

          <li class="nav-item ">
            
                <a class="dropbtn nav-btn my-2 dropdown f-nv">Looking For My Home</a>
               
           
              </li></ul></div>
           
          
        
       
      </div>
  
  </nav>
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
<!-- <script>
  // Wait for the DOM to load
  document.addEventListener("DOMContentLoaded", function(event) {
    // Get the navbar toggle button element
    var navbarToggle = document.querySelector(".navbar-toggler");

    // Get the navbar collapse element
    var navbarCollapse = document.querySelector(".navbar-collapse");

    // Add click event listener to the navbar toggle button
    navbarToggle.addEventListener("click", function() {
      // Check if the navbar collapse is currently shown
      var isCollapsed = navbarCollapse.classList.contains("show");

      // Toggle the show class to show/hide the navbar collapse
      if (isCollapsed) {
        navbarCollapse.classList.remove("show");
      } else {
        navbarCollapse.classList.add("show");
      }
    });
  });
</script> -->

