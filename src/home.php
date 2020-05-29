<?php
include_once('./gen/function.php');
 
session_start();

$profile = "";
$fname = "";
//return to login if not logged in
if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
	$fname    = 'Guest';
}else{
$user = new model();

//fetch user data
$sql = "SELECT * FROM users WHERE id = '".$_SESSION['user']."'";
$row = $user->details($sql);

$file = UPLOAD.$row['img'];
if (!is_file($file)) {
	$profile = UPLOAD.'default.png';
}
	$fname    = $row['first_name'];
}

require_once('header.php');
?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" style="height: 200px;" src="../inc/img/01.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 200px;" src="../inc/img/02.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 200px;" src="../inc/img/03.png" alt="Third slide">
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
    <br>

<!-- // card carousel -->
    <!--Carousel Wrapper-->
	<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

	  <!--Controls-->
	  <div align="center" class="controls-top">
	    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-arrow-alt-circle-left"></i></a>
	    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-arrow-alt-circle-right"></i></a>
	  </div>
	  <!--/.Controls-->

	  <!--Indicators-->
	  <ol class="carousel-indicators">
	    <li data-target="#multi-item-example" data-slide-to="0" class="active"><i class="fas fa-dot-circle"></i></li>
	    <li data-target="#multi-item-example" data-slide-to="1"><i class="fas fa-dot-circle"></i></li>
	    
	  </ol>
	  <!--/.Indicators-->

	  <!--Slides-->
	  <div class="carousel-inner" role="listbox">

	    <!--First slide-->
	    <div class="carousel-item active">

	      <div class="col-md-3" style="float:left">
	       <div class="card mb-2">
	          <img class="card-img-top"
	            src="../inc/img/01.png" alt="Card image cap">
	          <div class="card-body">
	            <h4 class="card-title">Card title</h4>
	            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
	              card's content.</p>
	            <a class="btn btn-primary">Add to cart</a>
	          </div>
	        </div>
	      </div>

	      <div class="col-md-3" style="float:left">
	        <div class="card mb-2">
	          <img class="card-img-top"
	            src="../inc/img/02.png" alt="Card image cap">
	          <div class="card-body">
	            <h4 class="card-title">Card title</h4>
	            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
	              card's content.</p>
	            <a class="btn btn-primary">Add to cart</a>
	          </div>
	        </div>
	      </div>

	      <div class="col-md-3" style="float:left">
	        <div class="card mb-2">
	          <img class="card-img-top"
	            src="../inc/img/03.png" alt="Card image cap">
	          <div class="card-body">
	            <h4 class="card-title">Card title</h4>
	            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
	              card's content.</p>
	            <a class="btn btn-primary">Add to cart</a>
	          </div>
	        </div>
	      </div>
	      
	       <div class="col-md-3" style="float:left">
	       <div class="card mb-2">
	          <img class="card-img-top"
	            src="../inc/img/04.png" alt="Card image cap">
	          <div class="card-body">
	            <h4 class="card-title">Card title</h4>
	            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
	              card's content.</p>
	            <a class="btn btn-primary">Add to cart</a>
	          </div>
	        </div>
	      </div>

	    </div>
	    <!--/.First slide-->

	    <!--Second slide-->
	    <div class="carousel-item">

	      <div class="col-md-3" style="float:left">
	        <div class="card mb-2">
	          <img class="card-img-top"
	            src="../inc/img/05.png" alt="Card image cap">
	          <div class="card-body">
	            <h4 class="card-title">Card title</h4>
	            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
	              card's content.</p>
	            <a class="btn btn-primary">Add to cart</a>
	          </div>
	        </div>
	      </div>

	      <div class="col-md-3" style="float:left">
	        <div class="card mb-2">
	          <img class="card-img-top"
	            src="../inc/img/06.png" alt="Card image cap">
	          <div class="card-body">
	            <h4 class="card-title">Card title</h4>
	            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
	              card's content.</p>
	            <a class="btn btn-primary">Add to cart</a>
	          </div>
	        </div>
	      </div>

	      <div class="col-md-3" style="float:left">
	        <div class="card mb-2">
	          <img class="card-img-top"
	            src="../inc/img/02.png" alt="Card image cap">
	          <div class="card-body">
	            <h4 class="card-title">Card title</h4>
	            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
	              card's content.</p>
	            <a class="btn btn-primary">Add to cart</a>
	          </div>
	        </div>
	      </div>
	      
	      <div class="col-md-3" style="float:left">
	        <div class="card mb-2">
	          <img class="card-img-top"
	            src="../inc/img/04.png" alt="Card image cap">
	          <div class="card-body">
	            <h4 class="card-title">Card title</h4>
	            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
	              card's content.</p>
	            <a class="btn btn-primary">Add to cart</a>
	          </div>
	        </div>
	      </div>

	    </div>
	    <!--/.Second slide-->

	   

	  </div>
	  <!--/.Slides-->

	</div>
	<div align="center" class="controls-top">
	    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-arrow-alt-circle-left"></i></a>
	    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-arrow-alt-circle-right"></i></a>
	  </div>
	<!--/.Carousel Wrapper-->

<?php require_once('footer.php')?>