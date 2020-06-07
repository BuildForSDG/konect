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

	echo "<h2>user</h2>";
	echo "<h2 align='center'> Hello world! </h2>";

	define('footer', TRUE);
	require_once('./src/footer.php');
});

$route->any('/signin', function(){

	define('login', TRUE);
	include(BASE_PATH. './src/login.php');
});

$route->any('/signup', function(){
	define('login', TRUE);
	include(BASE_PATH. './src/signup.php');
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


$route->get(['/', 'board'], function(){

	define('header', TRUE);
	require_once('./src/header.php');

	define('board', TRUE);
	require_once('./src/board.php');

	define('footer', TRUE);
	require_once('./src/footer.php');

});

$route->end();
?>