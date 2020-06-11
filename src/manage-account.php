<?php
defined('account-managee') or 
die('<h2>404 Not Found.<em>You are caught!</em></h2>');

$error_message = '';
$success_message = '';
$User = new model();
$stateList = $User->state();

$vkey = '9876543210kyvxabcdefghijklmnopqrstuvCDEFGHIJKLMNOPQRSTUVWXYZjmnhoiup';
$vky = substr(str_shuffle($vkey), 0, 10); 
 
$date = new DateTime();
$currentTime = $date->format('Y-m-d H:i:s');
if(isset($_POST['form1'])) {

    $authID = $_SESSION['farmkonectuser']['id'];
    $id = array('id' => $authID);

    $Iarray = array(
        'first_name'         =>  escape($_POST['fname']),
        'last_name'          =>  escape($_POST['lname']),
        'phone'              =>  escape($_POST['phone']),
        'updated_at'         =>  $currentTime
    );
    
        $upd = $User->update('users', $id, $Iarray);
        if (!$upd) {
        $error_message = " Error : check your input ";
        }else{
        $success_message = 'User Information is updated successfully.';
        }
}

if(isset($_POST['form2'])) {

	$valid = 1;

	$path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];

    if($path!='') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1) {

    	// removing the existing photo
    	if($_SESSION['farmkonectuser']['img']!='') {
    		unlink('inc/ufl/'.$_SESSION['farmkonectuser']['img']);	
    	}

    	// updating the data
    	$final_name = 'user_'.$vky.'_'.$_SESSION['farmkonectuser']['id'].'.'.$ext;
        move_uploaded_file( $path_tmp, 'inc/ufl/'.$final_name );
        $_SESSION['farmkonectuser']['img'] = $final_name;

        $authID = $_SESSION['farmkonectuser']['id'];
        $id = array('id' => $authID);

        $Iarray = array(
            'img'         =>  $final_name,
            'updated_at'         =>  $currentTime
        );
    
        $upd = $User->update('users', $id, $Iarray);
        if (!$upd) {
            $error_message = " Error : check your input ";
        }else{
            $success_message = 'User Photo is updated successfully.';
        }
    	
    }
}

if(isset($_POST['form3'])) {
	$valid = 1;

	if( empty($_POST['password']) || empty($_POST['re_password']) ) {
        $valid = 0;
        $error_message .= "Password can not be empty<br>";
    }

    if( !empty($_POST['password']) && !empty($_POST['re_password']) ) {
    	if($_POST['password'] != $_POST['re_password']) {
	    	$valid = 0;
	        $error_message .= "Passwords do not match<br>";	
    	}        
    }

    if($valid == 1) {

    	$_SESSION['farmkonectuser']['password'] = md5($_POST['password']);

        $authID = $_SESSION['farmkonectuser']['id'];
        $id = array('id' => $authID);

        $Iarray = array(
            'password'   =>  md5($_POST['password']),
            'updated_at'         =>  $currentTime
        );
    
        $upd = $User->update('users', $id, $Iarray);
        if ($upd) {
            
    	$success_message = 'User Password is updated successfully.';
        }
    }
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Profile</h1>
	</div>
</section>

<?php
$id = $_SESSION['farmkonectuser']['id'];
$authID = $User->authId('users', $id);
$user = $User->userById($authID);
       
foreach ($user as $key) {
    // fetch product Variables... 
    
    $U_fname		= $key['first_name'];
    $U_lname 		= $key['last_name'];
    $U_email 		= $key['email'];
    $U_phone       	= $key['phone'];
    $U_img       	= $key['img'];
    $U_gender 		= $key['gender'];
    $U_addresss 	= $key['residential_address'];
    $U_role 		= $key['role'];
    
    $fullName = $U_fname.' '.$U_lname;
}
?>


<div class="container-fluid">

	<div class="row">
        <div class="col-md-2"></div>
		<div class="col-md-10">
        <div class="alert text-center" style="color:red;">
            <?php echo $success_message; ?>
        </div>
        <div class="alert text-center" style="color:red;">
            <?php echo $error_message; ?>
        </div>
				
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab_1" data-toggle="tab">Update Information</a></li>
						<li><a href="#tab_2" data-toggle="tab">Update Photo</a></li>
						<li><a href="#tab_3" data-toggle="tab">Update Password</a></li>
					</ul>
					<div class="tab-content">
          				<div class="tab-pane active" id="tab_1">
							
							<form class="form-horizontal" action="" method="post">
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
										<label for="" class="col-sm-2 control-label"> First Name <span>*</span></label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="fname" value="<?php echo $U_fname; ?>">
										</div>										
									</div>
                                    <div class="form-group">
										<label for="" class="col-sm-2 control-label">Last Name <span>*</span></label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="lname" value="<?php echo $U_lname; ?>">
										</div>										
									</div>
									<div class="form-group">
							            <label for="" class="col-sm-2 control-label">Img</label>
							            <div class="col-sm-6" style="padding-top:6px;">
							                <img src="inc/ufl/<?php echo $U_img; ?>" class="existing-photo" width="140">
							            </div>
							        </div>
									
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Email Address <span>*</span></label>
										<div class="col-sm-4" style="padding-top:7px;">
										    <?php echo $U_email; ?>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Phone </label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="phone" value="<?php echo $U_phone; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left" name="form1">Update </button>
										</div>
									</div>
								</div>
							</div>
							</form>
          				</div>
          				<div class="tab-pane" id="tab_2">
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
							            <label for="" class="col-sm-2 control-label">New Img</label>
							            <div class="col-sm-6" style="padding-top:6px;">
							                <input type="file" name="photo">
							            </div>
							        </div>
							        <div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left" name="form2">Update Img</button>
										</div>
									</div>
								</div>
							</div>
							</form>
          				</div>
          				<div class="tab-pane" id="tab_3">
							<form class="form-horizontal" action="" method="post">
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Password </label>
										<div class="col-sm-4">
											<input type="password" class="form-control" name="password">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Retype Password </label>
										<div class="col-sm-4">
											<input type="password" class="form-control" name="re_password">
										</div>
									</div>
							        <div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left" name="form3">Update Password</button>
										</div>
									</div>
								</div>
							</div>
							</form>

          				</div>
          			</div>
				</div>			

		</div>
	</div>
</div>