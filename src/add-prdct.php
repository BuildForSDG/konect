<?php

define('header', TRUE);
require_once('header.php');

include_once('./gen/engine.class.php');

?>

<div class="container">
	<section class="content-header">
		<div class="content-header-left">
			<h1>Product</h1>
		</div>
		<div class="content-header-right">
			<a href="add-prdct.php" class="btn btn-primary btn-sm">Add New Product</a>
		</div>
	</section>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-2"></div>
		<div class="col-md-8">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-md-6">
                    <div style="background-color: red; color: white;" align="center">
                    <?php
                        if(isset($_SESSION['message'])){
                            ?>
                            <div class="alert alert-info text-center">
                            <?php echo $_SESSION['message']; ?>
                            </div>
                            <?php
                        }
                    ?>
                    </div>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputproductname">product name <i style="color: red">*</i></label>
                            <input name="title" type="text" class="form-control" placeholder="product name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputname">price <i style="color: red">*</i></label>
                            <input name="price" type="tel" class="form-control" placeholder="price" required>
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputLocation">location <i style="color: red">*</i></label>
                            <input name="location" type="text" class="form-control" id="inputLocation" placeholder="Location" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Image</label>
                            <div class="custom-file">
                                <input name="img[]" type="file" class="custom-file-input" id="validatedCustomFile">
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button name="prd_btn" type="submit" class="btn btn-color">Sign Up</button><hr>
                    </form>
                    <div style="background-color: red; color: white;" align="center">
                    <?php
                        if(isset($_SESSION['message'])){
                            ?>
                            <div class="alert alert-info text-center">
                            <?php echo $_SESSION['message']; ?>
                            </div>
                            <?php
                            unset($_SESSION['message']);
                        }
                    ?>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
	</div>
</div>


<div class="container-fluid">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-md-6">
			<div style="background-color: red; color: white;" align="center">
            <?php
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-info text-center">
                    <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php
                }
            ?>
        	</div>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		        <div class="form-row">
		          <div class="form-group col-md-6">
		            <label for="inputproductname">product name <i style="color: red">*</i></label>
		            <input name="title" type="text" class="form-control" placeholder="product name" required>
		          </div>
		          <div class="form-group col-md-6">
		            <label for="inputname">price <i style="color: red">*</i></label>
		            <input name="price" type="tel" class="form-control" placeholder="price" required>
		          </div>
		        </div>
		        <div class="form-row">
		          <div class="form-group col-md-6">
		            <label for="inputLocation">location <i style="color: red">*</i></label>
		            <input name="location" type="text" class="form-control" id="inputLocation" placeholder="Location" required>
		          </div>
		          <div class="form-group col-md-6">
		            <label for="inputPassword4">Image</label>
		            <div class="custom-file">
					    <input name="img[]" type="file" class="custom-file-input" id="validatedCustomFile">
					    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
					    <div class="invalid-feedback">Example invalid custom file feedback</div>
					  </div>
		          </div>
		        </div>
		        <div class="form-group">
				    <label for="exampleFormControlTextarea1">Description</label>
				    <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
		        <button name="prd_btn" type="submit" class="btn btn-color">Sign Up</button><hr>
		    </form>
		    <div style="background-color: red; color: white;" align="center">
            <?php
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-info text-center">
                    <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php
                    unset($_SESSION['message']);
                }
            ?>
        	</div>
		</div>
		<div class="col-3"></div>
	</div>
</div>

<?php 
define('footer', TRUE);
require_once('footer.php');
?>