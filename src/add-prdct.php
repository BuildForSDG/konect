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
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
			  	<div class="content-header-right">
					<a href="add-prdct.php" class="btn color btn-sm">Add New Product</a>
				</div>
                <h4 class="card-title"> Product</h4>
                <p class="category"> Those are all the product you have added..</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                      	<th>S/N</th>
                      	<th>
                          Owner
                        </th>
						<th>
                          Image
                        </th>
                        <th>
                          Name
                        </th>
						<th>
                          Description
                        </th>
                        <th class="text-center">
                          Price
                        </th>
                        <th>
                          Location
                        </th>
                        <th>
                          Status
                        </th>
						<th class="text-center">
                          >>>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
<?php
$prdct = new model();
//fetch user data
$data = $prdct->product('products');
	
$sn 	= 0;
foreach ($data as $key) {
	$sn++;
	// fetch data Variables... 
	
	$name		 	= $key['name'];
	$image 			= $key['img_key'];
	$owner 			= $key['owner'];
	$description 	= $key['description'];
	$price 			= $key['price'];
	$location 		= $key['location'];
	$status 		= $key['status'];
?>
                      <tr>
                      	<td><?php echo $sn; ?></td>
                      	<td><?php echo $owner;?></td>
                        <td><?php echo $image;?></td>
                        <td><?php echo $name;?></td>
                        <td><?php echo $description;?></td>
                        <td class="text-center"><?php echo $price;?></td>
						<td><?php echo $location;?></td>
						<td><?php echo $status;?></td>
						<td>										
							<a href="edt-prdct.php?id=<?php echo $key['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
							<a href="#" class="btn btn-danger btn-xs" data-href="del-prdct.php?id=<?php echo $key['id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
						</td>
                      </tr>
                    </tbody>
                <?php } ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>

		</div>
		<div class="col-2"></div>
	</div>
</div>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure want to delete this item?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

<?php
/**
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
**/
?>
<?php 
define('footer', TRUE);
require_once('footer.php');
?>