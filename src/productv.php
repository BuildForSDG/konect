<?php
defined('productvv') or 
die('<h2>404 Not Found.<em>You are caught!</em></h2>');
//date_default_timezone_set('Africa/Lagos');
$error_message = '';
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



<?php } ?>