<?php

define('header', TRUE);
require_once('header.php');

include_once('./gen/engine.class.php');

?>

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
							<a href="#" class="btn btn-danger btn-xs" data-href="http://localhost/2020/BuildForSDG/team045/konect-Backend/product/<?php echo $key['id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
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
define('footer', TRUE);
require_once('footer.php');
?>