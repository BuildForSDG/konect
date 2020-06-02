<?php
include_once('./src/gen/engine.class.php');
define('DS', DIRECTORY_SEPARATOR);
define('BASE_PATH', __DIR__.DS);
require BASE_PATH.'./inc/route/vendor/autoload.php';

$app            = System\App::instance();
$app->request   = System\Request::instance();
$app->route     = System\Route::instance($app->request);

$route          =$app->route;

$route->any('/signin', function(){
	define('login', TRUE);
	include(BASE_PATH. './src/login.php');
});
$route->any('/product', function(){
	define('product', TRUE);
	include(BASE_PATH. './src/product.php');
});
$route->any('/signin', function(){
	header('Location: ./src/agent.php');
});
$route->any('/product/{id}', function($id){
	$product = new model();
	$authID = $product->authId('products', $id);
	if ($authID) {
		$del = $authID;
		$sucess = $product->delProduct($del);
		if ($sucess) {
			header('Location: ../src/product.php');
		}
	}
});

$route->get_post('/productEdit', function(){
	
		require BASE_PATH.'./src/header.php';
			echo 'this is product edit..';
		require BASE_PATH.'./src/footer.php';
	
});

$route->any('/kin', function(){
	echo "hii maza";
});

$route->get(['/', 'index', 'home'], function(){
	header('Location: ./src/home.php');
});

$route->end();
?>