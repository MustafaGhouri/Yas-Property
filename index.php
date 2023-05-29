<?php

include('header.php');

?>

<div class="banner-content">
  <div class="banner-heading">
    <h1 class="text-center banner-heading">Search Your Property With Us</h1>
  </div>



<div class="property-finder-main">
 
<form class="property-finder-fr1 flex-wrap" action="<?= $url . 'property-grid' ?>">
      <input type="hidden" name='propertyName' id='daataSearch' required value='0'>
      <div class="d-flex gap-2 mb-4 mt-5 w-100">
        <div class=" ">
          <label class="yashwale-btn" for="rent-yas">Rent
            <input type="radio" name="yasproptype" checked class="d-none" id="rent-yas" value="Rent">
          </label>
        </div>
        <div class=" ">

          <label class="yashwale-btn" for="buy-yas">Buy
            <input type="radio" name="yasproptype" class="d-none" id="buy-yas" value="Buy">
          </label>
        </div>
      </div>
      <div class="search-box-new">
        <li class="nav-item dropdown">
          <input class="nav-link  main-search-bar form-control" placeholder="Property Name or Location" name="search">
      </div>
      <div class="drp-1">
        <select class="search-control required" name='property_type' id='property_type'>
          <option value="any" selected>Property Type</option>
          <option value="Apartment">Apartment</option>
          <option value="Villa">Villa</option>
          <option value="TownHouse">TownHouse</option>
          <option value="Commercial">Commercial</option>
        </select>
      </div>
      <select class="cus-drop" name='rooms' id='rooms'>
        <option value="any" selected>Rooms</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
      <select class="cus-drop" name='price' id='yasprice'>
        <option value="any" selected>Price</option>
        <option value="20000">20,000</option>
        <option value="30000">30,000</option>
        <option value="40000">40,000</option>
        <option value="50000">50,000</option>
        <option value="60000">60,000</option>
        <option value="70000">70,000</option>
        <option value="80000">80,000</option>
        <option value="90000">90,000</option>
        <option value="100000">100,000</option>
        <option value="200000">200,000</option>
        <option value="300000">300,000</option>
        <option value="400000">400,000</option>
        <option value="500000">500,000</option>
        <option value="600000">600,000</option>
        <option value="700000">700,000</option>
      </select>
      <button type="submit" name="filterProperty" class="search-icon-new">
        <i class="bi bi-search"></i>
      </button>
    </form>
    <div class="for1">
      <script>
        function resetOptions() {
          const minPriceSelect = document.querySelector('.price select:first-child');
          const maxPriceSelect = document.querySelector('.price select:last-child');
          const pricereset = document.getElementById('price-anchor')
          minPriceSelect.value = "";
          maxPriceSelect.value = "";
          pricereset.innerHTML = "Price";
        }
        function updatePriceAnchor() {
          // Get the selected values from the select elements
          var minPrice = document.querySelector('.price select:first-child').value;
          var maxPrice = document.querySelector('.price select:last-child').value;
          // Update the text of the "Price" anchor with the selected range
          var priceAnchor = document.getElementById('price-anchor');
          priceAnchor.textContent = minPrice + ' - ' + maxPrice;
        }
      </script>
    </div>
  </div>
  <div class="property-finder-fr2 mt-3 d-none ">
    <div class="drp-1">
      <select class="search-control required" id="furnishing">
        <option value="">All furnishings</option>
        <option value="">Furnished</option>
        <option value="">Unfurnished</option>
        <option value="">Partly Furnished</option>
      </select>
    </div>
    <a id="price-anchor" value="" class="cus-drop-1" onclick="sqftarea()">Sqft</a>
    <div class="drp-1">
      <a id="amenties-1" value="" class="cus-drop-1" onclick="dropdawn2()">Amenties</a>
      <div class=" d-none" id="amenties">
        <input type="Search" class="form-control" placeholder="Search-Amenities" name="" id="">
        <div class="container">
          <div class="row check-row">
            <div class="col-md-4">
              <label><input type="checkbox" name="name1"> Maids Room</label><br>
              <label><input type="checkbox" name="name2"> Shared Pool</label><br>
              <label><input type="checkbox" name="name3"> Shared Gym</label><br>
              <label><input type="checkbox" name="name4"> Concierge Service</label><br>
            </div>
            <div class="col-md-4">
              <label><input type="checkbox" name="name1"> View of Water</label><br>
              <label><input type="checkbox" name="name2"> Pets Allowed</label><br>
              <label><input type="checkbox" name="name3"> Children's Pool</label><br>
              <label><input type="checkbox" name="name4"> Built In Wardrobes</label><br>
            </div>
            <div class="col-md-4">
              <label><input type="checkbox" name="name1"> Shared Spa</label><br>
              <label><input type="checkbox" name="name2"> Central A/C</label><br>
              <label><input type="checkbox" name="name3"> Covered Parking</label><br>
              <label><input type="checkbox" name="name4"> View of Landmark</label><br>

            </div>
          </div>
        </div>
      </div>
      <script>
        const rentBtn = document.getElementById("rent-btn");
        const buyBtn = document.getElementById("buy-btn");
        const furnishingSelect = document.getElementById("furnishing");
        // Add event listener to Rent button
        rentBtn.addEventListener("click", () => {
          // Set default option text
          furnishingSelect.options[0].textContent = "All furnishings";
          // Set other option texts
          furnishingSelect.options[1].textContent = "Furnished";
          furnishingSelect.options[2].textContent = "Unfurnished";
          furnishingSelect.options[3].textContent = "Partly Furnished";
        });
        // Add event listener to Buy button
        buyBtn.addEventListener("click", () => {
          // Set default option text
          furnishingSelect.options[0].textContent = "Completion ";
          // Set other option texts
          furnishingSelect.options[1].textContent = "off-plan";
          furnishingSelect.options[2].textContent = "Ready";
          furnishingSelect.options[3].textContent = "";
        });
      </script>
    </div>
    <div class="search-box-new">
      <input type="search" class="form-control barr" placeholder="Keywords: e.g. beach, chiller free">
    </div>
  </div>
</div>
<script>
  function sqftarea() {
    var x = document.getElementById("sqft");
    if (x.className === "d-none") {
      x.className = "d-block";
    } else {
      x.className = "d-none";
    }
  }
</script>
<script>
  const showMoreEl = document.getElementById('show-more');
  const propertyFinderFr2El = document.querySelector('.property-finder-fr2');
  const sqfft = document.getElementById('sqft');

  function closeall() {

    if (sqfft.className === "d-block") {
      sqfft.className = "d-none"
    }

  }
  showMoreEl.addEventListener('click', function(event) {
    event.preventDefault();


    propertyFinderFr2El.classList.toggle('d-none');
    const isHidden = propertyFinderFr2El.classList.contains('d-none');
    showMoreEl.textContent = isHidden ? 'Show More Options' : 'Show Less Options';
  });


  const showMoreEl1 = document.getElementById('show-more-1');
  const propertyFinderFr2El1 = document.querySelector('.property-finder-fr2-mb');

  showMoreEl1.addEventListener('click', function(event) {
    event.preventDefault();


    propertyFinderFr2El1.classList.toggle('d-none');
    const isHidden = propertyFinderFr2El1.classList.contains('d-none');
    showMoreEl.textContent = isHidden ? 'Show More Options' : 'Show Less Options';
  });
</script>
<script>
  function dropdawn() {
    var x = document.getElementById("content");
    if (x.className === "d-none") {
      x.className = "d-block";
    } else {
      x.className = "d-none";
    }
  }

  function dropdawn1() {
    var x = document.getElementById("price");
    if (x.className === "d-none") {
      x.className = "d-block";
    } else {
      x.className = "d-none";
    }
  }

  function dropdawn2() {
    var x = document.getElementById("amenties");
    if (x.className === "d-none") {
      x.className = "d-block";
    } else {
      x.className = "d-none";
    }
  }
</script>

<!-- mobile -->
<!-- <div class="property-finder-main-mb">
  <div class="property-finder-br-main">
    <div class="top-br">
      <a href="">Buy</a>
    </div>
    <div class="top-br">
      <a href="">Rent</a>
    </div>
  </div>
</div> -->
</div>
</div>
</div>
</div>
<?php
?>
<h1 class="text-center ex-1">Featured Properties</h1>
<div class="top-btns">
  <div class="top-inner">
    <a href="javascript:void(0)" class="top-buttons custom-tabs-items rent-item active" data-content="rent-tab">For Rent</a>
    <a href="javascript:void(0)" class="top-buttons custom-tabs-items Buy-item" data-content="Buy-tab">For Sale</a>
    <a href="javascript:void(0)" class="top-buttons custom-tabs-items Off-Plan-item" data-content="Off-Plan-tab">Off-Plan</a>
  </div>
</div>
<section class="ftco-section ftco-no-pt  feed-main">
  <div class="container">
    <div class="row justify-content-center">
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="carousel-car owl-carousel custom-tabs" id="rent-tab">
          <?php
          $res = mysqli_query($con, "SELECT property_image.image as prop_image ,addproperty.* FROM `property_image` JOIN addproperty ON property_image.property_id = addproperty.id WHERE addproperty.buy_rent = 'Rent'  GROUP BY property_id ORDER BY `id` DESC");
          while ($row = mysqli_fetch_array($res)) {
          ?>
            <div class="item">
              <div class="col-lg-3 col-md-6 col-sm-6  col-xs-6 mb-3 ast">
                <div class="card" style="">
                <a href="<?= $url . 'product-page?id=' . $row['id'] ?>">
                  <img class="card-img-top" src="<?= $url . 'uploads/property/' . $row['prop_image'] ?>" alt="Card image cap">
                  </a>
                  <div class="card-body">
                    <div class="d-flex justify-content-between flex-wrap w-100">
                      <p class="card-price"><?= $row['property_price'] ?> AED  </p>
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
            </div>
          <?php } ?>
        </div>
        <div class="carousel-car owl-carousel custom-tabs" id="Buy-tab" style="display: none;">
          <?php

          $res = mysqli_query($con, "SELECT property_image.image as prop_image ,addproperty.* FROM `property_image` JOIN addproperty ON property_image.property_id = addproperty.id WHERE addproperty.buy_rent = 'Buy'  GROUP BY property_id ORDER BY `id` DESC");
          while ($row = mysqli_fetch_array($res)) {

          ?>
            <div class="item">
              <div class="col-lg-3 col-md-6 col-sm-6  col-xs-6 mb-3 ast">
                <div class="card" style="">
                  <img class="card-img-top" src="<?= $url . 'uploads/property/' . $row['prop_image'] ?>" alt="Card image cap">
                  <div class="card-body">
                    <div class="d-flex justify-content-between flex-wrap w-100">
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
            </div>
          <?php } ?>
        </div>
        <div class="carousel-car owl-carousel custom-tabs" id="Off-Plan-tab" style="display: none;">
          <?php

          $res = mysqli_query($con, "SELECT property_image.image as prop_image ,addproperty.* FROM `property_image` JOIN addproperty ON property_image.property_id = addproperty.id WHERE addproperty.buy_rent = 'Off-Plan'  GROUP BY property_id ORDER BY `id` DESC");
          while ($row = mysqli_fetch_array($res)) {

          ?>
            <div class="item">
              <div class="col-lg-3 col-md-6 col-sm-6  col-xs-6 mb-3 ast">
                <div class="card" >
                  <img class="card-img-top" src="<?= $url . 'uploads/property/' . $row['prop_image'] ?>" alt="Card image cap">
                  <div class="card-body">
                    <div class="d-flex justify-content-between flex-wrap w-100">
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
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="new-third-section">
  <div class="container">
    <div class="row videos-row">
      <div class="col-md-8 videos-left py-5">
        <h1 class="ex">About Yas Properties</h1>
        <div class="playlistColumn1">
          <?php
          $selectPlaylist = mysqli_query($con, "SELECT * FROM `playlist` ORDER BY `id` DESC LIMIT 1");
          $fetchPlaylisy = mysqli_fetch_array($selectPlaylist);

          ?>
          <div class="frontvideo">
            <?= $fetchPlaylisy['embed'] ?>
          </div>

        </div>

      </div>
      <div class="col-md-4 video-right-col">
        <?php
        $selectPlaylist = mysqli_query($con, "SELECT * FROM `playlist` ORDER BY `id` DESC LIMIT 3");
        while ($fetchPlaylisy = mysqli_fetch_array($selectPlaylist)) {

        ?>
          <div class="video-sub fpp-playlist-item" id="<?= $fetchPlaylisy['id'] ?>">
            <div class="one ">
              <div class="one-l">
                <img src="<?= $fetchPlaylisy['yt_img'] ?>" class="one-img">
              </div>
              <div class="one-r ">
                <h5 class="one-r-para"><?= base64_decode($fetchPlaylisy['title']) ?></h5>
                <p class="video-subtitlee"><?= $fetchPlaylisy['short_title'] ?></p>
                <p class="video-subtitlee"><i class="bi bi-calendar3  p-2"></i> <?= $fetchPlaylisy['date'] ?></p>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </div>
</div>



<div class="three-btn">
  <a href="<?= $url . 'view-all-videos' ?>" class="three-btn-inner">View All New and Video</a>
</div>
<div class="form-section-main">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-12 form-left-side">
        <h2 class="left-side-heading">
          Book a Property valuation
        </h2>
        <p class="left-side-para"> Download a PDF of the latest and most common Questions. Perform a <br> search for license details using E-commerce Number.</p>
      </div>
      <div class="col-lg-6 col-sm-12 form-set form-hai">
        <H3 class="text-center form-heading mt-3">Request For Quote</H3>
        <label for="" class="form-label mt-3">Your Name</label>
        <input type="text" class="form-control">
        <br>
        <label for="" class="form-label">Email Address</label>
        <input type="email" class="form-control">
        <br>
        <label for="" class="form-label">Message</label>
        <textarea name="comment" class="mesage-box form-control" rows="5" cols="88"></textarea>
        <input type="submit" class="form-control mt-3 form-btn">

      </div>
    </div>
  </div>
</div>






<div class="container form-down-section">
  <div class="row">
    <div class="col-6 from-down-section">
      <h2 class="form-down-heading ">Find the perfect place to Live</h2>

      <p class="form-down-heading mb-4"> Download a PDF of the latest and most common Questions. Perform a <br> search for license details using E-commerce Number.</p>
      <div class="yealo">
        <a href="#" class="form-down-btn"> Download</a>
      </div>
    </div>
    <div class="col-6 from-ri8"></div>
  </div>
</div>

<div class="cards-section">
  <div class="container">
    <div class="row">
      <div class="col-md-3 mot-cards ">
        <div class="card-imgg">
          <img src="images/cardicon1.png" alt="">

        </div>
        <div class="card-contentt">
          <h2 class="card-headingg">15bn</h2>
          <p class="card-paraa">
            Over AED 15 billion of properties sold since inception</p>
        </div>

      </div>
      <div class="col-md-3 mot-cards">
        <div class="card-imgg">
          <img src="images/cardicon2.png" alt="">
        </div>
        <div class="card-contentt">
          <h2 class="card-headingg">1800+ </h2>
          <p class="card-paraa">
            In excess of 1,800 properties rented annually</p>
        </div>
      </div>
      <div class="col-md-3 mot-cards">
        <div class="card-imgg">
          <img src="images/cardicon3.png" alt="">
        </div>
        <div class="card-contentt">
          <h2 class="card-headingg">4.8/5</h2>
          <p class="card-paraa">
            In excess of 1,800 properties rented annually</p>
        </div>
      </div>
      <div class="col-md-3 mot-cards">
        <div class="card-imgg">
          <img src="images/cardicon4.png" alt="">
        </div>
        <div class="card-contentt">
          <h2 class="card-headingg">1800+</h2>
          <p class="card-paraa">
            In excess of 1,800 properties rented annually</p>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="container six">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12">
      <h2 class="why">Why You Choose Us</h2>

      <p class="why-para">Since 2004, Yas Properties has been a market leader in Dubai real estate. Our experienced agents will provide you with first class service and utmost dedication to achieve the best results for the sale of your property. </p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 lefty">
      <div class="three-btn">

        <a href="aboutus.php" class="three-btn-inner">Read More About Us</a>
      </div>
    </div>
  </div>
</div>
<div class="container seven">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-12 ast mb-3">
      <div class="card lastcards" style="">
        <img class="card-img-top" src="images/card-1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title-1">The Perfect Residency </h5>
          <p class="card-text-1">Experience a residency that exceeds your expectations, with impeccable amenities, breathtaking views, and a vibrant community that feels like home.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 ast mb-3">
      <div class="card lastcards" style="">
        <img class="card-img-top" src="images/card-2.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title-1">Trusted By Thousands </h5>
          <p class="card-text-1">Trusted by thousands, our residency provides a proven track record of delivering exceptional living spaces and customer satisfaction.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 ast mb-3">
      <div class="card lastcards" style="">
        <img class="card-img-top" src="images/card-3.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title-1">Payment Transaparency</h5>
          <p class="card-text-1">Experience payment transparency like never before, ensuring peace of mind and clarity in every transaction at our residency.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 ast mb-3">
      <div class="card lastcards" style="">
        <img class="card-img-top" src="images/card-4.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title-1">24/7 Customer Services</h5>
          <p class="card-text-1">Enjoy peace of mind with our round-the-clock customer service, ensuring prompt assistance and support whenever you need it at our residency.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include('footer.php')

?>
<script>
  $(document).on('click', ".custom-tabs-items", function() {
    let content = $(this).attr('data-content');
    $('.custom-tabs-items').removeClass('active')
    $(this).addClass('active')
    $(`.custom-tabs`).fadeOut();
    $(`#${content}`).fadeIn();
  })
</script>