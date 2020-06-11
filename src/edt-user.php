<?php
defined('edt-user') or 
die('<h2>404 Not Found.<em>You are caught!</em></h2>');
$error_message = '';

$User = new model();
//fetch users data
$authID = $User->authId('users', $id);
$user = $User->userById($authID);
$stateList = $User->state();
       
foreach ($user as $key) {
    // fetch product Variables... 
    
    $U_fname		= $key['first_name'];
    $U_lname 		= $key['last_name'];
    $U_email 		= $key['email'];
    $U_phone       	= $key['phone'];
    $U_gender 		= $key['gender'];
    $U_addresss 	= $key['residential_address'];
    $U_role 		= $key['role'];

?>
<?php


if (isset($_POST['update_btn'])){  
    $authID = $User->authId('users', $id);
    $id = array('id' => $authID);
    $date = new DateTime();
    $currentTime = $date->format('Y-m-d H:i:s');
    
//'img'                =>  escape($_POST['fname']),
$Iarray = array(
    'first_name'         =>  escape($_POST['fname']),
    'last_name'          =>  escape($_POST['lname']),
    'email'              =>  escape($_POST['email']),
    'phone'              =>  escape($_POST['phone']),
    'gender'             =>  $_POST['gender'],
    'state'              =>  $_POST['state'],
    'residential_address'=>  escape($_POST['address']),
    'role'               =>  escape($_POST['role']),
    'is_verified'        =>  escape($_POST['verify']),
    'updated_at'         =>  $currentTime
);

    $upd = $User->update('users', $id, $Iarray);
    if (!$upd) {
        $error_message = " Error : check your input ";
    }else{
        $error_message = " Sucessfully Added user.. ";
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
					    <a href="<?php echo FARMWEB_URL; ?>user" class="btn color btn-sm">All User</a>
				    </div>
                    <h4 class="card-title">Add User</h4>
                    <div class="alert color text-center">
                        <?php echo $error_message; ?>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputname">First Name <i style="color: red">*</i></label>
                                <input name="fname" value="<?php echo $U_fname; ?>" type="text" class="form-control" placeholder="First Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputname">Last Name <i style="color: red">*</i></label>
                                <input name="lname" value="<?php echo $U_lname; ?>" type="text" class="form-control" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email <i style="color: red">*</i></label>
                                <input name="email" value="<?php echo $U_email; ?>" type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPhone">Phone</label>
                                <input name="phone" value="<?php echo $U_phone; ?>" type="tel" class="form-control" placeholder="phone number" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputGender">Gender</label><br>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" checked value="m">
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="f">
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">State <i style="color: red">*</i></label>
                                <select name="state" class="form-control" required>
                                <?php foreach ($stateList as $State) { $list = $State['name'];?>
                                    <option value="<?php echo $list;?>"><?php echo $list;?></option>
                                <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address <i style="color: red">*</i></label>
                            <input name="address" value="<?php echo $U_addresss; ?>" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputState">Role <i style="color: red">*</i></label>
                                <select name="role" class="form-control" required>
                                    <option value="User">User</option>
                                    <option value="Agent">Agent</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputGender">Verify User</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="verify" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="verify" checked value="0">
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                        </div>
                        <button name="update_btn" type="submit" class="btn btn-color">Update User</button><hr>
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