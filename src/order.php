<?php
defined('order') or 
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
          <div class="content-header-right">
        </div>
                <h4 class="card-title">Product Order</h4>
                <p class="category"> All product order by the User..</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="myTable" class="table display color tablesorter ">
                    <thead class=" text-primary">
                      <tr>
                        <th>S/N</th>
                        <th>
                          Name
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Phone
                        </th>
                        <th>
                          Product
                        </th>
                        <th>
                          OrderCode
                        </th>
                        <th>
                          State
                        </th>
                        <th class="text-center">
                          Address
                        </th>
                        <th>
                          Date Order
                        </th>
                        <th class="text-center">
                          >>>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
<?php
$Order = new model();
$userId  = 	$_SESSION['farmkonectuser']['id'];
//fetch user data
$data = $Order->Order($userId);

$sn   = 0;
foreach ($data as $key) {
  $sn++;
  // fetch data Variables... 
  $UserId = $key['user_id'];
  $product        = $key['product'];
  $orderCode        = $key['order_code'];
  $status        = $key['order_status'];
  $address        = $key['shipping_location'];
  $isPaid     = $key['is_paid'];
  $dateOrder        = $key['date_order'];
  
  $getUserName = $Order->getUserName($UserId);

  
?>
                      <tr>
                        <td><?php echo $sn; ?></td>
                        <?php foreach ($getUserName as $Name) { ?>
                        <td><?php echo $Name['first_name'].' '.$Name['last_name'];?></td>
                        <td><?php echo $Name['email'];?></td>
                        <td><?php echo $Name['phone'];?></td>
                        <td><?php echo $product;?></td>
                        <td><?php echo $orderCode;?></td>
                        <td><?php echo $Name['state'];?></td>
                        <?php }?>
                        <td class="text-center"><?php echo $address;?></td>
                        <td class="text-center"><?php echo $dateOrder;?></td>
                        <td>   
                          <a class="btn color btn-xs" href="<?php echo FARMWEB_URL; ?>accept/<?php echo $key['id']; ?>">Accept</a>                   
                          <a href="#" class="btn btn-danger btn-xs" data-href="<?php echo FARMWEB_URL; ?>order/<?php echo $key['id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
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
                <p>Are you sure want to delete this Order?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>
