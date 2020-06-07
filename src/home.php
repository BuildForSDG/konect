<?php
defined('homee') or 
die('<h2>404 Not Found.<em>You are caught!</em></h2>');
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" style="height: 200px;" src="inc/img/01.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" style="height: 200px;" src="inc/img/02.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" style="height: 200px;" src="inc/img/03.png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
      <br>

    <!-- // card carousel -->
        <!--Carousel Wrapper-->
    <div class="row">
      <div class="col-12">
      <div class="container py-3">
        <div class="title h1 text-center">Horizontal cards - Bootstrap 4</div>
        <!-- Card Start -->
        <div class="card">
          <div class="row ">
          <?php
$prdct = new model();
//fetch user data
$data = $prdct->viewTable('products');
 
foreach ($data as $key) {
  // fetch data Variables... 
  
  $name     = $key['name'];
  $image      = $key['img_key'];
  $owner      = $key['owner'];
  $description  = $key['description'];
  $price      = $key['price'];
  $location     = $key['location'];
  $status     = $key['status'];
?>

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div id="CarouselTest" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
                        <li data-target="#CarouselTest" data-slide-to="1"></li>
                        <li data-target="#CarouselTest" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block" src="https://picsum.photos/450/300?image=1072" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="https://picsum.photos/450/300?image=855" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="https://picsum.photos/450/300?image=355" alt="">
                        </div>
                        <a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="card-block px-6">
                    <h4 class="card-title">Kartaera Farm </h4>
                    <p class="card-text"><b>Owner:</b>
                    
                    <p class="card-text"><b>Location:</b> </p>
                    <p class="card-text"><b>Details:</b> </p>
                    <br>
                    <a href="#" class="mt-auto btn color">Order</a>
                </div>
            </div>
<?php } ?> 
            <!-- End of carousel -->
          </div>
        </div>
        <!-- End of card -->

      </div>

      <div class="container">
        <div class="card float-left">
          <div class="row ">

            <div class="col-sm-7">
              <div class="card-block">
                <!--           <h4 class="card-title">Small card</h4> -->
                <p>Wetgple text to build your own card.</p>
                <p>Change around the content for awsomenes</p>
                <a href="#" class="btn btn-primary btn-sm">Read More</a>
              </div>
            </div>

            <div class="col-sm-5">
              <img class="d-block w-100" src="https://picsum.photos/150?image=380" alt="">
            </div>
          </div>
        </div>

      
          <div class="card float-right">
            <div class="row">
              <div class="col-sm-5">
                <img class="d-block w-100" src="https://picsum.photos/150?image=641" alt="">
              </div>
              <div class="col-sm-7">
                <div class="card-block">
                  <!--           <h4 class="card-title">Small card</h4> -->
                  <p>Copy paste the HTML and CSS.</p>
                  <p>Change around the content for awsomenes</p>
                  <br>
                  <a href="#" class="btn btn-primary btn-sm float-right">Read More</a>
                </div>
              </div>
      
            </div>
          </div>
        </div>
      
      <br>
      <br>
      
      </div>
</div>
