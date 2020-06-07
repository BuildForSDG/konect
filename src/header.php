<?php
defined('header') or 
die('<h2>404 Not Found.<em>You are caught!</em></h2>');


session_start();
//include("gen/function.php");
$error_message = '';
$success_message = '';
$error_message1 = '';
$success_message1 = '';

// Check if the user is logged in or not
if(!isset($_SESSION['farmkonectuser'])) {
	header('location: ./signin');
	exit;
}


// Current Page Access Level check for all pages
$currentroute = substr($_SERVER["REQUEST_URI"],strrpos($_SERVER["REQUEST_URI"],"/")+1);
//echo "<h2 align='center'>".$currentroute."</h2>";

if($_SESSION['farmkonectuser']['role']=='Agent' || $_SESSION['farmkonectuser']['role']=='User') {
  if( $currentroute == 'user' || $currentroute == 'add-user' || $currentroute == 'edt-user' || $currentroute == 'del-user' ) {
		header('location: '.FARMWEB_URL.'board');
		exit;
	}
}

if($_SESSION['farmkonectuser']['role']=='User') {
  if( $currentroute == 'product' || $currentroute == 'add-prdct' || $currentroute == 'edt-prdct' || $currentroute == 'del-prdct' ) {
		header('location: '.FARMWEB_URL.'board');
		exit;
	}
}

if($_SESSION['farmkonectuser']['role']=='User') {
  if( $currentroute != 'board' 
      && $currentroute != 'profile-edit'
      && $currentroute != 'order' 
      && $currentroute != 'edt-order' 
      && $currentroute != 'del-order'
      && $currentroute != 'notification'
	) {
		header('location: '.FARMWEB_URL.'board');
		exit;
	}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FarmKonect | </title>
  <!--meta http-equiv="refresh" content="2"-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo FARMWEB_URL; ?>inc/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo FARMWEB_URL; ?>inc/dist/css/main.css">
  <link rel="stylesheet" href="<?php echo FARMWEB_URL; ?>inc/dist/fontawesome/css/all.css">
  <link rel="stylesheet" type="text/css" href="<?php echo FARMWEB_URL; ?>inc/dist/css/datatables.min.css"/>
 
  <script src="<?php echo FARMWEB_URL; ?>inc/dist/js/datatables.min.js"></script>
  <script src="<?php echo FARMWEB_URL; ?>inc/dist/js/jquery.min.js"></script>
  <script src="<?php echo FARMWEB_URL; ?>inc/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo FARMWEB_URL; ?>inc/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo FARMWEB_URL; ?>inc/dist/js/jquery.slim.js"></script>

  <link rel="stylesheet" href="<?php echo FARMWEB_URL; ?>inc/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo FARMWEB_URL; ?>inc/dist/css/main.css">
  <link rel="stylesheet" href="<?php echo FARMWEB_URL; ?>inc/dist/fontawesome/css/all.css">
  <link rel="stylesheet" href="<?php echo FARMWEB_URL; ?>inc/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo FARMWEB_URL; ?>inc/dist/css/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo FARMWEB_URL; ?>inc/dist/style.css">
  <style type="text/css">
  body {
    background-color:  #eee;
  }
  .title {
  
      margin-bottom: 50px;
      text-transform: uppercase;
  }

  .card-block {
      font-size: 1em;
      position: relative;
      margin: 0;
      padding: 1em;
      border: none;
      border-top: 1px solid rgba(34, 36, 38, .1);
      box-shadow: none;
      
  }
  .card {
      font-size: 1em;
      overflow: hidden;
      padding: 5;
      border: none;
      border-radius: .28571429rem;
      box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
      margin-top:20px;
  }

  .carousel-indicators li {
      border-radius: 12px;
      width: 12px;
      height: 12px;
      background-color: #404040;
  }
  .carousel-indicators li {
      border-radius: 12px;
      width: 12px;
      height: 12px;
      background-color: #404040;
  }
  .carousel-indicators .active {
      background-color: white;
      max-width: 12px;
      margin: 0 3px;
      height: 12px;
  }
  .carousel-control-prev-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
  }

  .carousel-control-next-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
  }
  lex-direction: column;
  }

  .btn {
    margin-top: auto;
  }

  /** main */
    textarea{
      resize: none;
    }
    textarea::-webkit-scrollbar{
      width: 5px;
    }
    textarea::-webkit-scrollbar-thumb{
      border-radius: 5px;
      background-color: #FFD600;
    }
  </style>
</head>
<body class="fixed sidebar-mini">
  <header class="main-header">

      <a class="navbar-brand" href="#">
        <img src="<?php echo FARMWEB_URL; ?>inc/img/logo-color.png" width="30" height="30" class="d-inline-block align-top" alt="">
            FarmKonect
      </a>
    <nav class="navbar is-fixed-top navbar-expand-lg color">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class=""><i class="fas fa-grip-horizontal"></i></span>
        </a>
          <a class="navbar-brand" href="#">
            Dashboard
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Market</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Agents</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Help
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">About</a>
                  <a class="dropdown-item" href="#">Contact Us</a>
                  <a class="dropdown-item" href="#">FAQS</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Support us</a>
                </div>
              </li>
            </ul>
          </div>
          <a href="#"><span><i class="fas fa-cart-plus"></i></span></a>&nbsp;&nbsp;
            <!--//start profiles -->

          <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img style="border-radius: 50%; height: 35px; width: 35px;" src="<?php echo FARMWEB_URL; ?>inc/ufl/<?php if(!$_SESSION['farmkonectuser']['img']){ echo 'default.png'; }else{ echo $_SESSION['farmkonectuser']['img'];} ?>" class="user-image" alt="User Image">
                  <b> Hi <i><?php echo $_SESSION['farmkonectuser']['first_name'];?></i></b>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Dashboard</a>
                  <a class="dropdown-item" href="#">Notification</a>
                  <a class="dropdown-item" href="#">Edit Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="./logout">LogOut</a>
                </div>
              </li>
          </ul>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-iconn"><i class="fas fa-grip-horizontal"></i></span>
          </button>
      </nav>
  </header>

<?php $currentroute = substr($_SERVER["REQUEST_URI"],strrpos($_SERVER["REQUEST_URI"],"/")+1); ?>

  <aside class="main-sidebar color">
        <section class="sidebar">
      
            <ul class="sidebar-menu">

              <li class="treeview <?php if($currentroute == 'board') {echo 'active';} ?>">
                <a href="<?php echo FARMWEB_URL; ?>board">
                  <i class="fa fa-laptop"></i> <span>Dashboard</span>
                </a>
              </li>


          <?php if($_SESSION['farmkonectuser']['role'] == 'Admin'): ?>
              <li class="treeview <?php if( ($currentroute == 'add-user')||($currentroute == 'user')||($currentroute == 'edt-user') ) {echo 'active';} ?>">
                <a href="user">
                  <i class="fa fa-user-plus"></i> <span>User</span>
                </a>
              </li>
            <?php endif; ?>  

            <?php 
            if($_SESSION['farmkonectuser']['role'] == 'Admin' 
                || $_SESSION['farmkonectuser']['role'] == 'Agent'):
          ?>
              <li class="treeview <?php if( ($currentroute == 'add-prdct')||($currentroute == 'product')||($currentroute == 'edt-prdct') ) {echo 'active';} ?>">
                <a href="product">
                  <i class="fa fa-newspaper-o"></i> <span>Product</span>
                </a>
              </li>
              <?php endif; ?>

              

          

          <?php 
            if($_SESSION['farmkonectuser']['role'] == 'Admin' 
                || $_SESSION['farmkonectuser']['role'] == 'Agent'):
          ?>
              <li class="treeview <?php if( ($currentroute == 'comment') ) {echo 'active';} ?>">
                <a href="comment">
                  <i class="fa fa-comment"></i> <span>Comment</span>
                </a>
              </li>
              <?php endif; ?>




              <li class="treeview <?php if( ($currentroute == 'add-order')||($currentroute == 'order')||($currentroute == 'edt-order') ) {echo 'active';} ?>">
                <a href="order">
                  <i class="fa fa-file"></i> <span>Order</span>
                </a>
              </li>

          <?php 
            if($_SESSION['farmkonectuser']['role'] == 'Admin' 
                || $_SESSION['farmkonectuser']['role'] == 'Agent' || $_SESSION['farmkonectuser']['role'] == 'User'):
          ?>
              <li class="treeview <?php if( ($currentroute == 'notification') ) {echo 'active';} ?>">
                <a href="notification">
                  <i class="fa fa-cog"></i> <span>Notification</span>
                </a>
              </li>
              <?php endif; ?>

          <?php 
            if($_SESSION['farmkonectuser']['role'] == 'Admin' 
                || $_SESSION['farmkonectuser']['role'] == 'Agent' || $_SESSION['farmkonectuser']['role'] == 'User'):
          ?>
              <li class="treeview <?php if( ($currentroute == 'manage-account') ) {echo 'active';} ?>">
                <a href="manage-account">
                  <i class="fa fa-cog"></i> <span>Manage Account</span>
                </a>
              </li>
              <?php endif; ?>

              <li class="treeview <?php if( ($currentroute == 'logout') ) {echo 'active';} ?>">
                <a href="logout">
                  <i class="fa fa-exit"></i> <span>Logout</span>
                </a>
              </li>
        
            </ul>
        </section>
      </aside>
      <!--div class="content-wrapper"-->