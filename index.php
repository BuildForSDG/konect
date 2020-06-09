<?php
include_once('./src/gen/engine.class.php');
define('DS', DIRECTORY_SEPARATOR);
define('BASE_PATH', __DIR__.DS);
require BASE_PATH.'./inc/route/vendor/autoload.php';

$app            = System\App::instance();
$app->request   = System\Request::instance();
$app->route     = System\Route::instance($app->request);

$route          =$app->route;

$route->any('/user', function(){
	define('header', TRUE);
	require_once('./src/header.php');

	define('user', TRUE);
	require_once('./src/user.php');

	define('footer', TRUE);
	require_once('./src/footer.php');
});

$route->any('/verify/{key}', function($key){
	$User = new model();
	$vKey = $User->verifyKey($key);
	if ($vKey === $key) {
		$vv = $User->updateVKey($key);
		if($vv){
		echo 'you have sucessfully activate your account..';
		}
	}else{
		echo 'Please do signup';
	}
});

$route->any('/add-user', function(){
	define('header', TRUE);
	require_once('./src/header.php');

	define('add-user', TRUE);
	require_once('./src/add-user.php');

	define('footer', TRUE);
	require_once('./src/footer.php');
});

$route->any('/edt-user/{id}', function($id){
	// thing..
	define('header', TRUE);
	require BASE_PATH.'./src/header.php';

		$User = new model();
		$authID = $User->authId('users', $id);
		if ($authID) {

			define('edt-user', TRUE);
			require BASE_PATH.'./src/edt-user.php';
			
		}else{
			header('location: ../src/logout.php');
		}

	define('footer', TRUE);
	require BASE_PATH.'./src/footer.php';
});

$route->any('/signin', function(){

	define('head', TRUE);
	require_once('./src/head.php');

	define('login', TRUE);
	include(BASE_PATH. './src/login.php');

	define('footer', TRUE);
	require_once('./src/footer.php');
});

$route->any('/signup', function(){
	define('head', TRUE);
	require_once('./src/head.php');

	define('signupp', TRUE);
	include(BASE_PATH. './src/signup.php');

	define('footer', TRUE);
	require_once('./src/footer.php');
});


$route->any('/profile-edit', function(){
	
});

$route->any('/order', function(){
	
});	

$route->any('/edt-order', function(){
	
});

$route->any('/del-order', function(){
	
});

$route->any('/product', function(){
	define('header', TRUE);
	require BASE_PATH.'./src/header.php';

	define('product', TRUE);
			require BASE_PATH.'./src/product.php';

	define('footer', TRUE);
	require BASE_PATH.'./src/footer.php';
});

$route->any('/productv/v/{id}', function($id){
	define('head', TRUE);
	require BASE_PATH.'./src/head.php';

		$product = new model();
		$authID = $product->authId('products', $id);
		if ($authID) {

			define('productvv', TRUE);
			require BASE_PATH.'./src/productv.php';
			
			
		}else{
			header('location: ../src/logout.php');
		}

	define('footer', TRUE);
	require BASE_PATH.'./src/footer.php';
});

$route->any('/comment', function(){
	
});
$route->any('/notification', function(){
	
});	
$route->any('/logout', function(){
	session_start();
	session_destroy();

	header('location: signin');
	
});

$route->any('/product/{id}', function($id){
	$product = new model();
	$authID = $product->authId('products', $id);
	if ($authID) {
		$del = $authID;
		$sucess = $product->delProduct($del);
		if ($sucess) {
			header('Location: ../product');
			// error below will fixed it
			//echo "sucessfully deleted";
		}
	}else{
		header('location: ../logout');
	}
});

$route->any('/add-prdct', function(){
	
	// thing..
	define('header', TRUE);
	require BASE_PATH.'./src/header.php';

	define('add-prdct', TRUE);
	require BASE_PATH.'./src/add-prdct.php';

	define('footer', TRUE);
	require BASE_PATH.'./src/footer.php';
	
});

$route->any('/prdct-edt/{id}', function($id){
	// thing..
	define('header', TRUE);
	require BASE_PATH.'./src/header.php';

		$product = new model();
		$authID = $product->authId('products', $id);
		if ($authID) {

			define('edt-prdct', TRUE);
			require BASE_PATH.'./src/edt-prdct.php';
			
			
		}else{
			header('location: ../src/logout.php');
		}

	define('footer', TRUE);
	require BASE_PATH.'./src/footer.php';
	
});


$route->get(['/board'], function(){

	define('header', TRUE);
	require_once('./src/header.php');

	define('board', TRUE);
	require_once('./src/board.php');

	define('footer', TRUE);
	require_once('./src/footer.php');

});

$route->get(['/', 'home'], function(){

	define('head', TRUE);
	require_once('./src/head.php');

	define('homee', TRUE);
	require_once('./src/home.php');

	define('footer', TRUE);
	require_once('./src/footer.php');

});

$route->end();
?>