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
            <img class="d-block w-100" style="height: 250px;" src="inc/img/01.jpeg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" style="height: 250px;" src="inc/img/02.jpeg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" style="height: 250px;" src="inc/img/03.jpeg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" style="height: 250px;" src="inc/img/04.jpeg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" style="height: 250px;" src="inc/img/05.jpg" alt="Third slide">
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
        <div class="title h1 text-center">Feature Products</div>
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
  $keyy     = $key['img_key'];

  $Img = $prdct->productPic($keyy);
 
?>

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div id="CarouselTest" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
                        <li data-target="#CarouselTest" data-slide-to="1"></li>
                        <li data-target="#CarouselTest" data-slide-to="2"></li>
                        <li data-target="#CarouselTest" data-slide-to="3"></li>
                        <li data-target="#CarouselTest" data-slide-to="4"></li>
                        <li data-target="#CarouselTest" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
  <?php foreach ($Img as $Ig) { $productImage = $Ig['img_Url']; ?>
                        <div class="carousel-item active">
                            <img class="d-block" style="height: 200px;" src="inc/ufl/<?php echo $productImage; ?>" alt="">
                        </div>
                        
                        <a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <?php } ?>
                    </div>
                </div>
               
                <div class="card-block px-6">
                    <h4 class="card-title"><?php echo $name;?></h4>
                    <p class="card-text"><b>Owner: <?php echo $owner;?></b>
                    
                    <p class="card-text"><b>Location: <?php echo $location;?></b> </p>
                    <p class="card-text"><b>Details: <?php echo $description;?></b> </p>
                    <br>
                    <a href="<?php echo FARMWEB_URL; ?>productv/v/<?php echo $key['id']; ?>" class="mt-auto btn color">Order</a>
                </div>
            </div>
<?php } ?> 
            <!-- End of carousel -->
          </div>
        </div>
        <!-- End of card -->

      </div>      
      <br>
      <br>
      
      </div>
</div>
