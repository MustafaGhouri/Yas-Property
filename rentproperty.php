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
    <title>Rent Your Property</title>
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
                  <a class="  havar nav-btn my-2 f-nv" href="<?=$url.'invester'?>">I Am An Invester</a>
                </li>
      
                <li class="nav-item  ">
                  
                      <a class="dropbtn nav-btn my-2 dropdown f-nv">Looking For My Home</a>
                     
                 
                    </li></ul></div>
                 
                
              
             
            </div>
        
        </nav>
      </header>
<div class="rent-banner-main">
    <div class="rent-inner">
       <span class="rentspan text-center">If you would like to take away the stresses of renting out your property in Dubai, then we have you covered.</span>
       <h1 class="rentpropertyheading text-center">Property Management in Dubai</h1>
       <a href="" class="rentbanbtn">View Packages</a>
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