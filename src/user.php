<?php
defined('user') or 
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
          <a href="<?php echo FARMWEB_URL; ?>add-user" class="btn color btn-sm">Add New User</a>
        </div>
                <h4 class="card-title"> User</h4>
                <p class="category"> Those are all the User..</p>
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
                          Gender
                        </th>
                        <th>
                          State
                        </th>
                        <th class="text-center">
                          Address
                        </th>
                        <th>
                          Role
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
$User = new model();
//fetch user data
$data = $User->user();

$sn   = 0;
foreach ($data as $key) {
  $sn++;
  // fetch data Variables... 
  
  $fname        = $key['first_name'];
  $lname        = $key['last_name'];
  $email        = $key['email'];
  $phone        = $key['phone'];
  $gender        = $key['gender'];
  $state        = $key['state'];
  $location     = $key['residential_address'];
  $role        = $key['role'];
  $status       = $key['is_verified'];
  if($status == 1){
    $status = "Verified";
  }else{
    $status = "Not Verify";
  }
?>
                      <tr>
                        <td><?php echo $sn; ?></td>
                        <td><?php echo $fname.' '.$lname;?></td>
                        <td><?php echo $email;?></td>
                        <td><?php echo $phone;?></td>
                        <td><?php echo $gender;?></td>
                        <td><?php echo $state;?></td>
                        <td class="text-center"><?php echo $location;?></td>
                        <td><?php echo $role;?></td>
                        <td><?php echo $status;?></td>
                        <td>                    
                            <a href="<?php echo FARMWEB_URL; ?>edt-user/<?php echo $key['id']; ?>" class="btn color btn-xs">Edit</a>
                            <a href="#" class="btn btn-danger btn-xs" data-href="<?php echo FARMWEB_URL; ?>user/<?php echo $key['id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
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
