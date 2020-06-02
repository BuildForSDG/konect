<?php
defined('edt-prdct') or 
die('<h2>404 Not Found.<em>You are caught!</em></h2>');

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-2"></div>
		<div class="col-md-8">
		<div class="row">
          <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
			  	    <div class="card-header-right">
					    <a href="product.php" class="btn color btn-sm">All Product</a>
				    </div>
                    <h4 class="card-title">Add New Product</h4>
                    <p class="category">  
                        <?php if(isset($_SESSION['farmkonectmessage'])){ ?>
                        <div class="alert alert-info text-center">
                            <?php echo $_SESSION['farmkonectmessage']; ?>
                        </div>
                            <?php unset($_SESSION['farmkonectmessage']); }?>
                    </p>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputproductname">Owner name <i style="color: red">*</i></label>
                                <input name="owner" type="text" class="form-control" placeholder="product name" required>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="inputname">Phone Number <i style="color: red">*</i></label>
                                <input name="phone" type="tel" class="form-control" placeholder="phone No" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputproductname">product name <i style="color: red">*</i></label>
                                <input name="title" type="text" class="form-control" placeholder="product name" required>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="inputname">price <i style="color: red">*</i></label>
                                <input name="price" type="text" class="form-control" placeholder="price" required>
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
                        
                        <div class="form-group">
                            <button name="prd_btn" type="submit" class="btn btn-color">Sign Up</button><hr>
                        </div>  
                    </form>
                </div>
              </div>
            </div>
          </div>
      </div>

		</div>
		<div class="col-2"></div>
	</div>
</div>

?>