<?php

defined('login') or 
die('<h2>404 Not Found.<em>You are caught!</em></h2>');

ob_start();
session_start();

$con = new mysqli("localhost", "root", "", "farmKonect");
if ($con->connect_errno) {
    echo "Failed to connect (".$con->connect_errno.")".$con->connect_error;
}
$error_message='';

	if(isset($_POST['logoon'])) {

		$userid 	= escape($_POST['username']);
		$pass 		= escape($_POST['password']);
	        
	    if(empty($userid) || empty($pass)) {
	        $error_message = 'Email and/or Password can not be empty<br>';
	    } else {
	    	$sql = "SELECT * FROM users WHERE email = '$userid'";
	        $query = $con->query($sql);
	        //$rows = $query->fetch_array();

	            if($query->num_rows > 0){
	                foreach($query as $row) { 
	                    $row_password = $row['password'];
	                }

	                if( $row_password != md5($pass) ) {
	                    $error_message = 'Password does not match<br>';
	                } else { 
	                //echo "you're good to go";      
						$_SESSION['farmkonectuser'] = $row;
	                    header("location: ./board");
	                }
	            }else{
	                $error_message = 'Email Address does not match<br>';
	                //return $error_message;
	            }
		}
	}

?>

<div class="container-fluid">
  <div class="row">
    <div class="col-8"></div>
    <div class="col-md-4">

      <div style="background-color: red; color: white;" align="center">
      <?php 
        if( (isset($error_message)) && ($error_message!='') ):
          echo '<p>'.$error_message.'</p>';
        endif;
      ?>
      </div>

      <form method="post" action="">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input name="username" type="text" class="form-control" placeholder="Enter email">
          <small class="form-text">error ...</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input name="password" type="password" class="form-control" placeholder="Password">
          <small class="form-text">error ...</small>
        </div>
        <div class="form-group form-check">
          <input name="check" type="checkbox" class="form-check-input">
          <label class="form-check-label" for="exampleCheck1">Keep me login</label>
        </div>
        <button type="submit" name="logoon" class="btn btn-color">SignIp</button>
      </form>
    </div>
    
  </div>
</div>
                