<?php
ob_start();
session_start();

$con = new mysqli("localhost", "root", "", "farmKonect");
if ($con->connect_errno) {
	echo "Failed to connect (".$con->connect_errno.")".$con->connect_error;
}

$error_message='';

if(isset($_POST['logbtn'])) {

	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['pass']);
        
    if(empty($username) || empty($password)) {
        $error_message = 'Email and/or Password can not be empty<br>';
    } else {
    	if (inserti($username, $password)){
    	$_SESSION['user'] = $row;
    }
    }
}


function inserti($userid, $password){
	$sql = "SELECT * FROM test WHERE email = '$userid'";
	$query = $GLOBALS['con']->query($sql);

	    if($query->num_rows > 0){
	        foreach($query as $row) { 
	            $row_password = $row['password'];
	        }

	        if( $row_password != md5($password) ) {
	            $GLOBALS['error_message'] .= 'Password does not match<br>';
	        } else {       
	            return $_SESSION['user'] = $row;
	            header("location: ./k.php");
	        }
	    }else{
	       	$GLOBALS['error_message'] .= 'Email Address does not match<br>';
	        //return $error_message;
	        }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>

	<?php 
	    if( (isset($error_message)) && ($error_message!='') ):
	        echo '<div style="color: red;">'.$error_message.'</div>';
	    endif;
	    ?>
	<form action="" method="post">
		<input type="text" name="username" placeholder="username"><br>
		<input type="password" name="pass" placeholder="password"><br>
		<input type="submit" name="logbtn">
	</form>

</body>
</html>

<?php
/**
if (!$con->query("DROP TABLE IF EXISTS test") ||
	!$con->query("CREATE TABLE test(
		`id` INT NOT NULL,
		`email` VARCHAR(200) NOT NULL,
		`password` VARCHAR(200) NOT NULL,
		PRIMARY KEY (`id`)) ENGINE=MyISAM ") ||
	!$con->query("INSERT INTO `test`(`email`, `password`) VALUES 
		('amb@gmail.com', '123456'),
		('demo@gmail.com', '123456'),
		('admin@gmail.com', '123456')")) {
	echo "Table creation failed: (".$con->errno.")".$con->error;
}
**
$result = $con->query("SELECT id FROM test ORDER BY id ASC");

echo "Result order...<br>";
for ($row_no= $result->num_rows - 1; $row_no >= 0; $row_no--) { 
	$result->data_seek($row_no);
	$row = $result->fetch_assoc();
	echo " id = ".$row['id']."<br>";
}

echo "Result set order...<br>";
$result->data_seek(0);
while ($row = $result->fetch_assoc()) {
	echo " id = ".$row['id']."<br>";
}

**/
?>