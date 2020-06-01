<?php
include_once('engine.class.php');

// you can only call this function in the users signup page by modifing all the fields here.  i.e user()
function user(){	
	//$error_message = '';
	$user = new model();
		
	if (isset($_POST['signup'])){ 
		if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email'])) {
		        $_SESSION['message'] = "All fields with <b style='color: red;'>*</b> is required!";
		}else{
		    $firstName 	= 	escape($_POST['fname']);
		    $lastName 	= 	escape($_POST['lname']);
		    $email 		= 	escape($_POST['email']);
		    $password 	= 	escape($_POST['pass']);
		    $st 		= 	escape($_POST['st']);
		    $address 	=	escape($_POST['address']);	
		    $gender		=	escape($_POST['gender']);
		    $role		=	'User';
		    $pass 		= 	md5($password);
		    // we need to validate the input
		    
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
}

function loggo(){
	$user = new model();

	if(isset($_POST['logoon'])) {

	  $username 	= escape($_POST['username']);
	  $pass 		= escape($_POST['password']);
	        
	    if(empty($email) || empty($password)) {
	        $GLOBALS['error_message'] = 'Email and/or Password can not be empty<br>';
	    } else {
	      $auth = $user->signin($username, $pass);

	      if(!$auth){
	      $GLOBALS['error_message'] = 'Invalid username or password';
	        //header('location:signin.php');
	      }else{
	      
	      $_SESSION['user']['role'] = $auth;
	      header('location: board.php');
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

function product($userid){
	$user = new model();
		if (empty($_POST['title']) && empty($_POST['price']) && empty($_POST['location']) && empty($_POST['desc'])) {
		        $_SESSION['message'] = "All fields with <b style='color: red;'>*</b> is required!";
		    }
		if (isset($_POST['prd_btn'])){ 
		    $title 		= 	escape($_POST['title']);
		    $price 		= 	escape($_POST['price']);
		    $location 	= 	escape($_POST['location']);
		    $description 	= 	escape($_POST['desc']);
		    //$img 		= 	escape($_POST['img']);
		    // we need to validate the input
		    // later
		    $key = rand().time();
		    if ($userid != ''){
		    	$owner = $userid;
		    }else{
		    	$_SESSION['message'] = "You're not signIn";
		    }
		    $info = array(
		    	"owner"			=>  $owner,
		    	"name"			=>  $title,
		    	"description"	=>  $description,	
		    	"img_key"		=>  $key,
		    	"price"			=>  $price,
		    	"location"		=>  $location
		    );

		   $data = $user->InsertData("products", $info);
		    if (!$data) {
		        $_SESSION['message'] = "you miss something important.";
		    }else{
		        $_SESSION['message'] = "Successfully";
		    }
		}
	}

?>