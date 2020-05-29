<?php
include_once('engine.class.php');


// you can only call this function in the users signup page by modifing all the fields here.  i.e user()
function user(){
	$user = new model();
		if (empty($_POST['fname']) && empty($_POST['lname']) && empty($_POST['email']) && empty($_POST['password']) && empty($_POST['state']) && empty($_POST['address'])) {
		        $_SESSION['message'] = "All fields with <b style='color: red;'>*</b> is required!";
		    }
		if (isset($_POST['signup'])){ 
		    $firstName 	= 	escape($_POST['fname']);
		    $lastName 	= 	escape($_POST['lname']);
		    $email 		= 	escape($_POST['email']);
		    $password 	= 	escape($_POST['pass']);
		    $st 		= 	escape($_POST['st']);
		    $address 	=	escape($_POST['address']);	
		    $gender		=	escape($_POST['sex']);
		    $role		=	escape('user');
		    $pass 		= 	md5($password);
		    if ($gender == 'male') {
		    	$gender == 'm';
		    }else{
		    	$gender == 'f';
		    }
		    
		    $info = array(
		    	"first_name"			=>  $firstName,
		    	"last_name"				=>  $lastName,
		    	"email"					=>  $email,	
		    	"phone"					=>  '',
		    	"password"				=>  $pass,
		    	"gender"				=>  $gender,
		    	"state"					=>  $st,	
		    	"residential_address"	=>  $address,		
		    	"role"					=>  $role,
		    );

		   if ($info['email'] == $user->authEmail("users", $info['email'])) {
		   		$_SESSION['message'] = "this email already been use";
		   }else{
		   	  $data = $user->InsertData("users", $info);
		    if (!$data) {
		        $_SESSION['message'] = "Please check your login details and try again later.";
		    }else{
		         //we can verify user by email.......
		        $_SESSION['message'] = "Successfully";
		    }
		}
	}
}

function logIn(){
	$user = new model();

	if (empty($_POST['username']) && empty($_POST['password'])) {
		$_SESSION['message'] = "use your email or phone number to signin";
	}

	if(isset($_POST['signInBtn'])){
		$username 	= escape($_POST['username']);
		$password 	= escape($_POST['password']);
		$pass 		= md5($password);

		$auth = $user->login($username, $pass);

		if(!$auth){
			$_SESSION['message'] = 'Invalid username or password';
	    	//header('location:index.php');
		}
		else{
			$_SESSION['user'] = $auth;
			header('location: ../src/home.php');
		}
	}
}

?>