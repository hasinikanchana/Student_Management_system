<?php
require_once 'header.php';
require_once 'navigation.php';
?>

<body>
      <!-- carousal start -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/newc1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-block">
              <h2><span>Prathibha Education Center</span><span> Sri Lanka</span></h2>
              <p><span>Best Education center in the Sri Lanka.</span></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/newc2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-block">
              <h2><span>Prathibha Education Center</span><span> Sri Lanka</span></h2>
              <p><span>Best Education center in the Sri Lanka.</span></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/newc3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-block">
              <h2><span>Prathibha Education Center</span><span> Sri Lanka</span></h2>
              <p><span>Best Education center in the Sri Lanka.</span></p>
            </div>
          </div>
        </div>
      </div>
      <!-- carousal end -->

      <!-- Gallery -->
      <main class="mt-5">
        <div class="container">
          <h2 class="h2-responsive fw-bold text-center my-2">Gallery</h2>
          <p class="text-center w-responsive mx-auto mb-1">Welcome to the Image Gallery for the Students of Earth Uni College</p>
        </div>
        
        <!-- Gallery start-->
        <div class="lightbox">
          <div class="row">
            <div class="col-lg-6">
              <img
                src="img/c1.jpg"
                data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Slides/1.webp"
                alt="Table Full of Spices"
                class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
              />
              <img
                src="img/c2.jpg"
                data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Square/1.webp"
                alt="Coconut with Strawberries"
                class="w-100 shadow-1-strong rounded"
              />
            </div>
            <div class="col-lg-6">
              <img
                src="img/c3.jpg"
                data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Slides/1.webp"
                alt="Table Full of Spices"
                class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
              />
              <img
                src="img/c4.jpg"
                data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Square/1.webp"
                alt="Coconut with Strawberries"
                class="w-100 shadow-1-strong rounded" width="420px" height="550px"
              />
            </div>
          </div>
        </div>
<!-- Gallery end-->
</main>

<?php
require_once 'footer.php';
?>

