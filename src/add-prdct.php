<?php
defined('add-prdct') or 
die('<h2>404 Not Found.<em>You are caught!</em></h2>');

$error_message = '';
$prdct = new model();
if (isset($_POST['prd_add_btn'])){ 

   $array = array(
       'userid' 	    => 	$_SESSION['farmkonectuser']['id'],
       'owner' 	        => 	escape($_POST['owner']),
       'phone' 	        => 	escape($_POST['phone']),
       'name' 		    => 	escape($_POST['title']),
       'description'    => 	escape($_POST['desc']),
       'price' 	        =>	escape($_POST['price']),	
       'location'	    =>	escape($_POST['location'])
   );
   
   $addd = $prdct->InsertData('products', $array);
   if (!$addd) {
       $error_message = " Having some certain error, check your input ";
   }else{
       $error_message = " Sucessfully updated.. ";
   }
}
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
					    <a href="<?php echo FARMWEB_URL; ?>product" class="btn color btn-sm">All Product</a>
				    </div>
                    <h4 class="card-title">Add Product</h4>
                    <div class="alert color text-center">
                        <?php echo $error_message; ?>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="">
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
                            
                            <!--div class="form-group col-md-6">
                                <label for="inputPassword4">Image</label>
                                <div class="custom-file">
                                    <input name="img[]" type="file" class="custom-file-input" id="validatedCustomFile">
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div-->
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3">....</textarea>
                        </div>
                        
                        <div class="form-group">
                            <button name="prd_add_btn" type="submit" class="btn btn-color">Add</button><hr>
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