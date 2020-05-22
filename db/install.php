<?php
require_once('db.class.php');

try {
	$dbclass = new DB();
	$con = $dbclass->Connection();
	$sql = file_get_contents('db.sql');
	$con->exec($sql);
	echo 'You are all setup | database and tables created sucessfully..<br> Please don not forget to delete /db Directory.';
} catch (PDOException $e) {
	echo $e->getMessage();
}

?>