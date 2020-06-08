<?php
defined('add-prdct') or 
die('<h2>404 Not Found.<em>You are caught!</em></h2>');

$error_message = '';
$statusMsg = '';
$prdct = new model();
$conector = new mysqli('localhost', 'root', '', 'farmkonect');
$kys = '9876543210kyvxabcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZjmnhoiup';
$kys = substr(str_shuffle($kys), 0, 18); 
if (isset($_POST['prd_add_btn'])){  
     
    // File upload configuration 
   // $targetDir = "uploads/"; 
    $targetDir = "inc/ufl/"; 
    $allowTypes = array('jpg','png','jpeg','gif'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
             
             
            // Check whether file type is valid 
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
            $randky = '9876543210kyvxabcdefghijklmnopqrstuvwxyz35gnvdjABCDEFGHIJKLMNOPQRSTUVWXYZjmnhoiup';
            $randky = 'product-'.substr(str_shuffle($randky), 0, 18).'fk';
            $final_name = $randky.'.'.$fileType;
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetDir.$final_name)){ 
                    // Image db insert sql 
                    $insertValuesSQL .= "('".$final_name."', '".$kys."', NOW()),"; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
        if(!empty($insertValuesSQL)){ 
            $insertValuesSQL = trim($insertValuesSQL, ','); 
            // Insert image file name into database product_img (img_Url, unique_Key, date_upload)
            $insert = $conector->query("INSERT INTO product_img (img_Url, unique_Key, date_upload) VALUES $insertValuesSQL"); 
            if($insert){ 
                $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
                $statusMsg = "Files are uploaded successfully.".$errorMsg; 
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 

    $array = array(
        'userid' 	    => 	$_SESSION['farmkonectuser']['id'],
        'owner' 	        => 	escape($_POST['owner']),
        'phone' 	        => 	escape($_POST['phone']),
        'name' 		    => 	escape($_POST['title']),
        'description'    => 	escape($_POST['desc']),
        'price' 	        =>	escape($_POST['price']),	
        'location'	    =>	escape($_POST['location']),
        'img_key'	    =>	$kys
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
                    <form method="post" action="" enctype="multipart/form-data">
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
                                    <input name="files[]" type="file" multiple class="custom-file-input">
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                                <span style="color: red;"><?php echo $statusMsg;?></span>
                            </div>
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