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
      <div class="contact-main-section">
        <div class="container-fluid contact-container">
          <div class="row raw">
            <div class="col-md-6 contact-main-left">
      <div class="contact-left-inner-content-1">
        <h1 class="contact-main-heading">Renting a Property in Dubai</h1>
        <p class="cw">Are you trying to find the right rental property that fits your budget, has the amenities you are looking for and in the area you desire?</p>
        <p class="cw pt-3">With Metropolitan Premium Properties your search will be easy and hassle-free. All our agents have extensive real estate experience combined with perfect knowledge of UAE laws. We will take care of drawing up a lease agreement and will make sure you get the best possible terms.</p>
        <div class="contact-buttons pt-4">
          <a href="" class="request-btn">Request For Call</a>
        </div>
      </div>
      
            </div>
            <div class="col-md-6 contact-main-right">
      <img src="images/bann.jpg" class="w-100 contactimg" alt="">
            </div>
          </div>
        </div>
      </div>


      <div class="rentpropertysectionone">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="rentpropetysectiononeinner">
                        <h2 class="rentfirstsectionheading mt-4">How to Successfully Own and Lease <br>
                            a Rental Property in Dubai</h2>
                            <p class="rentpara my-3">Your Agent should conduct a market analysis for you indicating the following:</p>
                            <div class="list">
                            <ol class="rentlist">
                    <li class="itemrent">The fair and competitive price they can successfully lease your property for;</li>
                                <li class="itemrent">What the average time on the market is for your type of property;</li>
                                <li class="itemrent">What the current activity is in your area – Is it a renter’s market or landlord’s market;</li>
                                <li class="itemrent">What current factors are a plus or minus for you to lease your property;</li>
                                <li class="itemrent">What type of lessee can you expect.</li>
                            </ol>
                            <p>Your Agent should be able to fully guide you on the leasing process, the current laws in Dubai that directly affect you and how the Landlord and Tenant relationship works.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="rentsecondsectionmain">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 rentsecondright">
                    <img src="images/side.jpg" class="w-100 rightsideimage" alt="">

                </div>
                <div class="col-md-8">
                    <div class="rentpropetysectiononeinner " style="width: 700px; padding-left: 25px;">
                        <h2 class="rentfirstsectionheading mt-5">How to Successfully Own and Lease <br>
                            a Rental Property in Dubai</h2>
                            <p class="rentpara my-3">Your Agent should conduct a market analysis for you indicating the following:</p>
                            <div class="list">
                            <ol class="rentlist">
                    <li class="itemrent">The fair and competitive price they can successfully lease your property for;</li>
                                <li class="itemrent">What the average time on the market is for your type of property;</li>
                                <li class="itemrent">What the current activity is in your area – Is it a renter’s market or landlord’s market;</li>
                                <li class="itemrent">What current factors are a plus or minus for you to lease your property;</li>
                                <li class="itemrent">What type of lessee can you expect.</li>
                            </ol>
                            <p>Your Agent should be able to fully guide you on the leasing process, the current laws in Dubai that directly affect you and how the Landlord and Tenant relationship works.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="fourthsectionmain">
        <div class="fourthinner">
            <h2 class="text-center fourheading">How is The Rental Process Going?</h2>
            <p class="fourpara mt-4">Being a Landlord in Dubai comes with great responsibility due to the stringent laws. Therefore, it is important to know all aspects that affect you as a Landlord including what type of documentation you will need, what type of documentation is required of the Tenant, Tenancy Laws and general knowledge of how the rental process currently works in Dubai.
<br><br>
                Our agents will provide you with professional advice until moving. We do everything to make your move comfortable and safe.</p>

        </div>
       
      </div>

      <div class="rentfifthsection">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="bc my-4">Budget</h2>
              <p>The first thing to review is your budget. In Dubai, the standard is to pay the full year of rent in 1-4 cheques in advance, as per the mutual agreement with the Landlord.</p>
              <p class="mb-5">It is also necessary to consider the additional costs that will be required during the search for a rental</p>
              <a href="rent.php" class="theme-btn ">Rent a Property</a>

            </div>
            <div class="col-md-6">
              <img src="images/budgetvectot.jpg" class="w-100" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="rentfifthsection">
        <div class="container">
          <div class="row">
           
            <div class="col-md-6">
              <img src="images/protype.jpg" class="w-100" alt="">
            </div>
            <div class="col-md-6">
              <h2 class="bc my-4">Location and Type of Property</h2>
              <p>Once you have calculated your budget, you can choose your area accordingly. You want to find an area which is convenient for you and your commuting time to work and/or school.</p>
              <p class="mb-5">You can discuss your requirements with the Agent who will help you pinpoint an area and property suitable to your type, you can start your home search.</p>
              <a href="rent.php" class="theme-btn ">Rent a Property</a>

            </div>
          </div>
        </div>
      </div>
      <div class="rentfifthsection">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="bc my-4">Property Search</h2>
              <p>The next step will be the search and inspection of suitable real estate options.</p>
              <p class="mb-5">Our agents are well oriented in the areas, in the course of cooperation they will advise you on the advantages and disadvantages of the location, clarify important points and find the best accommodation for its price.</p>
              <a href="rent.php" class="theme-btn ">Rent a Property</a>

            </div>
            <div class="col-md-6">
              <img src="images/propertysearch.jpg" class="w-100" alt="">
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