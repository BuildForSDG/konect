<?php
defined('edt-prdct') or 
die('<h2>404 Not Found.<em>You are caught!</em></h2>');

?>
<?php
    $prdct = new model();
        $authID = $prdct->authId('products', $id);
    //fetch product data
    $data = $prdct->productById($authID);
       
    foreach ($data as $key) {
        // fetch product Variables... 
        
        $name		 	= $key['name'];
        $image 			= $key['img_key'];
        $owner 			= $key['owner'];
        $description 	= $key['description'];
        $phone       	= $key['phone'];
        $price 			= $key['price'];
        $location 		= $key['location'];
        $status 		= $key['status'];

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
                    <form method="post" action="">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputproductname">Owner name <i style="color: red">*</i></label>
                                <input name="owner" value="<?php echo $owner?>" type="text" class="form-control" placeholder="product name" required>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="inputname">Phone Number <i style="color: red">*</i></label>
                                <input name="phone" value="<?php echo $phone?>" type="tel" class="form-control" placeholder="phone No" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputproductname">product name <i style="color: red">*</i></label>
                                <input name="title" value="<?php echo $name?>" type="text" class="form-control" placeholder="product name" required>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="inputname">price <i style="color: red">*</i></label>
                                <input name="price" value="<?php echo $price?>" type="text" class="form-control" placeholder="price" required>
                            </div>
                        </div>

                        <!--div class="form-row"-->
                            <div class="form-group col-md-6">
                                <label for="inputLocation">location <i style="color: red">*</i></label>
                                <input name="location" value="<?php echo $location?>" type="text" class="form-control" id="inputLocation" placeholder="Location" required>
                            </div>
                            
                            <!--div class="form-group col-md-6">
                                <label for="inputPassword4">Image</label>
                                <div class="custom-file">
                                    <input name="img[]" type="file" class="custom-file-input" id="validatedCustomFile">
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>
                        </div-->
                        
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea name="desc" value="<?php echo $description?>" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <button name="prd_update_btn" type="submit" class="btn btn-color">Update</button><hr>
                        </div>  
                    </form>
                    <?php } ?>
                </div>
              </div>
            </div>
          </div>
      </div>

		</div>
		<div class="col-2"></div>
	</div>
</div>
<?php
if (isset($_POST['prd_update_btn'])){ 
    //empty($_POST['owner']) || empty($_POST['phone']) || empty($_POST['name']) || empty($_POST['price']) || empty($_POST['location']) || empty($_POST['description'])) {
        
    if (empty($_POST['name'])) {
            $_SESSION['farmkonectmessage'] = "All fields with <b style='color: red;'>*</b> is required!";
    }else{

       // $InsOwner 	    = 	escape($_POST['owner']);
        //$InsPhone 	    = 	escape($_POST['phone']);
        $InsName 		= 	escape($_POST['name']);
        //$InsDescription = 	escape($_POST['description']);
        //$InsImg 		= 	escape($_POST['img_key']);
        //$InsPrice 	    =	escape($_POST['price']);	
        //$InsLocation	=	escape($_POST['location']);
        //$role		    =	'User';
        //$pass 		    = 	md5($password);
                // we need to validate the input
        /**
        $info = array(
            "owner"         =>  InsOwner,
            "phone"         =>  InsPhone,
            "name"          =>  InsName,
            "description"   =>  InsDescription,
            //"img_key"       =>  InsPrice,
            "price"         =>  InsPrice,
            "location"      =>  InsLocation
        );
        **/

        $data = $prdct->UpdateProduct($InsName, $id);
        if (!$data) {
            $_SESSION['farmkonectmessage'] = "Please check your login details and try again later.";
        }else{
         //we can verify user by email.......
         $_SESSION['farmkonectmessage'] = "Successfully";
        }
        /**
        if ($info['email'] == $user->authEmail("users", $info['email'])) {
               $_SESSION['message'] = "this email already been use";
           }else{
             $data = $user->InsertData("users", $info);
            if (!$data) {
                $_SESSION['message'] = "Please check your login details and try again later.";
            }else{
             //we can verify user by email.......
            $_SESSION['message'] = "Successfully";
            }
        }
        **/
    }
}

?>