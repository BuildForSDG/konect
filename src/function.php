<?php
include_once('engine.class.php');

// you can only call this function in the users signup page by modifing all the fields here.  i.e user()
function user(){
	$user = new model();
	if (empty($_POST['name']) && empty($_POST['email']) && empty($_POST['pass']) && empty($_POST['state']) && empty($_POST['address'])) {
	        $_SESSION['message'] = 'You can not leave some field empty!';
	    }
	if (isset($_POST['signup'])){ 
	    $Name 		= 	escape($_POST['name']);
	    $Email 		= 	escape($_POST['email']);
	    $Password 	= 	escape($_POST['password']);
	    $State 		= 	escape($_POST['state']);
	    $Address 	=	escape($_POST['address']);	
	    //$Gender		=	escape($gender);
	    $Role		=	escape($_POST['role']);
	    
	    $pass = md5($Password);
	    
	    $info = array(
	    	"name"					=>  $Name,	
	    	"email"					=>  $Email,	
	    	"password"				=>  $pass,	
	    	"residential_address"	=>  $State,	
	    	"state"					=>  $Address,	
	    	"role"					=>  $Role,
	    );

	   if ($info['email'] == $user->authEmail("users", $info['email'])) {
	   		$_SESSION['message'] = "this email already been use";
	   }else{
	   	  $data = $user->InsertData("users", $info);
	    if (!$data) {
	        $_SESSION['message'] = "Having some error";
	    }else{
	         //we can verify user by email.......
	        $_SESSION['message'] = "Successfully";
	    }
	}
}
}


?>