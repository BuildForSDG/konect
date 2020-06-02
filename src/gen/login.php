<?php
include_once('keys.php');
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
	                    header("location: ./board.php");
	                }
	            }else{
	                $error_message = 'Email Address does not match<br>';
	                //return $error_message;
	            }
		}
	}
?>