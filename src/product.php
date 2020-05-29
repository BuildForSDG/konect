<?php
include_once('./gen/function.php');
 
session_start();

//return to login if not logged in
if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
	header('Location: ./home.php');
}
$user = new model();

//fetch user data
$sql = "SELECT * FROM users WHERE id = '".$_SESSION['user']."'";
$row = $user->details($sql);

require_once('header.php');
?>


<?php require_once('footer.php')?>