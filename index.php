<?php

define('DS', DIRECTORY_SEPARATOR);
define('BASE_PATH', __DIR__.DS);
require BASE_PATH.'./inc/route/vendor/autoload.php';

$app            = System\App::instance();
$app->request   = System\Request::instance();
$app->route     = System\Route::instance($app->request);

$route          =$app->route;
//$route->any('/', function(){
//	echo "Hello world";
//});

$route->any('/signin', function(){
	header('Location: ./src/signin.php');
});

$route->get(['/', 'index', 'home'], function(){
	echo "Hello home";
});

$route->end();
?>

<?php
//require "vendor/autoload.php";

//use App\Project;
/**
$dirr = 'db';
$file = '0.html';
chdir($dirr);
$d = unlink($file);
if (!$d) {
	echo "not deleted";
}else{
    echo "deleted";
}
**/
function delDir($dir)
{
	$files = array_diff(scandir($dir), array('.','..'));
	foreach ($files as $file) {
		(is_dir("$dir/$file")) ? delDir("$dir/$file") : unlink("$dir/$file");
	}
	return rmdir($dir);
}

function AddDir($file, $contenti)
{
	$content = file_get_contents($file);
	$content = $contenti; //"<html><head><title>new crated files</title></head><body>0.html<br>hello world<hr></body>";
	return file_put_contents($file, $content);
}

$filei = 'k0.html';
$content = "<html><head><title>new crated files</title></head><body><h2>0.html</h2><h5>hello world</h5><hr></body>";
//AddDir($filei, $content);
//**
if(!is_file($filei)){
	echo "<b>[/$filei]</b> File Don't exist";
}else{
	AddDir($filei, $content);
	echo "File successfully added/created.";
	//header('Location: k.html');
}
//**/



$os = PHP_OS;

$dir = 'db';

if (!is_dir($dir)) {
	echo "<b>[/$dir]</b> Directory already deleted!";
}else{
	delDir($dir);
	echo "Directory socessfully deleted!";
	//header('Location: k.html');
}