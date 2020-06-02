<?php
defined('header') or 
die('<h2>404 Not Found.<em>You are caught!</em></h2>');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FarmKonect | </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../inc/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../inc/dist/css/main.css">
  <link rel="stylesheet" href="../inc/dist/fontawesome/css/all.css">
  <script src="../inc/dist/js/jquery.min.js"></script>
  <script src="../inc/dist/js/bootstrap.min.js"></script>
  <script src="../inc/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../inc/dist/js/jquery.slim.js"></script>

  <link rel="stylesheet" href="../inc/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../inc/dist/css/main.css">
  <link rel="stylesheet" href="../inc/dist/fontawesome/css/all.css">
  <link rel="stylesheet" href="../inc/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../inc/dist/css/_all-skins.min.css">
  <link rel="stylesheet" href="../inc/dist/style.css">
  <style type="text/css">
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

<?php
session_start();
$error_message = '';

// Check if not logged in..
if(!isset($_SESSION['farmkonectuser'])) {
  ?>

  <nav class="navbar is-fixed-top navbar-expand-lg color">
      <a class="navbar-brand" href="#">
        <img src="../inc/img/logo-color.png" width="30" height="30" class="d-inline-block align-top" alt="">
            FarmKonect
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
          <a href="signin"><button class="btn btn-color" type="button">Login</button></a>&nbsp;&nbsp;
            <a href="#"><span><i class="fas fa-cart-plus"></i></span></a>&nbsp;&nbsp;
            <!--//start profiles -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-iconn"><i class="fas fa-grip-horizontal"></i></span>
          </button>
      </nav>
<?php
  //header('location: ./login.php');
  //exit;
}else{
// if the user is logged in or not

// Current Page Access Level check for all pages
$cur_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);

if($_SESSION['farmkonectuser']['role']=='Agent') {
  if( $cur_page == 'user.php' || $cur_page == 'user-add.php' || $cur_page == 'user-edit.php' || $cur_page == 'user-delete.php' ) {
    header('location: board.php');
    exit;
  }
}

if($_SESSION['farmkonectuser']['role']=='User') {
  if( $cur_page != 'board.php' 
      && $cur_page != 'profile-edit.php' 
      && $cur_page != 'comment.php' 
      && $cur_page != 'product.php'
      && $cur_page != 'add-prdct.php' 
      && $cur_page != 'edt-prdct.php' 
      && $cur_page != 'del-prdct.php' 
  ) {
    header('location: board.php');
    exit;
  }
}

?>

  <header class="main-header">

      <a class="navbar-brand" href="#">
        <img src="../inc/img/logo-color.png" width="30" height="30" class="d-inline-block align-top" alt="">
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
                <img style="border-radius: 50%; height: 35px; width: 35px;" src="../inc/ufl/<?php if(!$_SESSION['farmkonectuser']['img']){ echo 'default.png'; }else{ echo $_SESSION['farmkonectuser']['img'];} ?>" class="user-image" alt="User Image">
                  <b> Hi <i><?php echo $_SESSION['farmkonectuser']['first_name'];?></i></b>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Dashboard</a>
                  <a class="dropdown-item" href="#">Notification</a>
                  <a class="dropdown-item" href="#">Edit Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="./logout.php">LogOut</a>
                </div>
              </li>
          </ul>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-iconn"><i class="fas fa-grip-horizontal"></i></span>
          </button>
      </nav>
  </header>

<?php $cur_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); ?>

  <aside class="main-sidebar color">
        <section class="sidebar">
      
            <ul class="sidebar-menu">

              <li class="treeview <?php if($cur_page == 'board.php') {echo 'active';} ?>">
                <a href="board.php">
                  <i class="fa fa-laptop"></i> <span>Dashboard</span>
                </a>
              </li>


          <?php if($_SESSION['farmkonectuser']['role'] == 'Admin'): ?>
              <li class="treeview <?php if( ($cur_page == 'user-add.php')||($cur_page == 'user.php')||($cur_page == 'user-edit.php') ) {echo 'active';} ?>">
                <a href="user.php">
                  <i class="fa fa-user-plus"></i> <span>User</span>
                </a>
              </li>
            <?php endif; ?>  

            <?php 
            if($_SESSION['farmkonectuser']['role'] == 'Admin' 
                || $_SESSION['farmkonectuser']['role'] == 'Agent'):
          ?>
              <li class="treeview <?php if( ($cur_page == 'add-prdct.php')||($cur_page == 'product.php')||($cur_page == 'news-edt-prdct.php') ) {echo 'active';} ?>">
                <a href="product.php">
                  <i class="fa fa-newspaper-o"></i> <span>Product</span>
                </a>
              </li>
              <?php endif; ?>

              

          

          <?php 
            if($_SESSION['farmkonectuser']['role'] == 'Admin' 
                || $_SESSION['farmkonectuser']['role'] == 'Agent'):
          ?>
              <li class="treeview <?php if( ($cur_page == 'comment.php') ) {echo 'active';} ?>">
                <a href="comment.php">
                  <i class="fa fa-comment"></i> <span>Comment</span>
                </a>
              </li>
              <?php endif; ?>




              <li class="treeview <?php if( ($cur_page == 'add-order.php')||($cur_page == 'order.php')||($cur_page == 'edt-order.php') ) {echo 'active';} ?>">
                <a href="order.php">
                  <i class="fa fa-file"></i> <span>Order</span>
                </a>
              </li>

          
          <?php 
            if($_SESSION['farmkonectuser']['role'] == 'Admin'):
          ?>
              <li class="treeview <?php if( ($cur_page == 'add-advt.php')||($cur_page == 'advt.php')||($cur_page == 'edt-advt.php') ) {echo 'active';} ?>">
                <a href="advt.php">
                  <i class="fa fa-podcast"></i> <span>Advert</span>
                </a>
              </li>
              <?php endif; ?>

          <?php 
            if($_SESSION['farmkonectuser']['role'] == 'Admin' 
                || $_SESSION['farmkonectuser']['role'] == 'Agent' || $_SESSION['farmkonectuser']['role'] == 'User'):
          ?>
              <li class="treeview <?php if( ($cur_page == 'notification.php') ) {echo 'active';} ?>">
                <a href="notification.php">
                  <i class="fa fa-cog"></i> <span>Notification</span>
                </a>
              </li>
              <?php endif; ?>

          <?php 
            if($_SESSION['farmkonectuser']['role'] == 'Admin' 
                || $_SESSION['farmkonectuser']['role'] == 'Agent' || $_SESSION['farmkonectuser']['role'] == 'User'):
          ?>
              <li class="treeview <?php if( ($cur_page == 'manage-account.php') ) {echo 'active';} ?>">
                <a href="manage-account.php">
                  <i class="fa fa-cog"></i> <span>Settings</span>
                </a>
              </li>
              <?php endif; ?>

              <li class="treeview <?php if( ($cur_page == 'logout.php') ) {echo 'active';} ?>">
                <a href="logout.php">
                  <i class="fa fa-file"></i> <span>Logout</span>
                </a>
              </li>
        
            </ul>
        </section>
      </aside>
      <?php }?>