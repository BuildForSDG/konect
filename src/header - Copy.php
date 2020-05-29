<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
  <style type="text/css">
/**
.rounded-circle {
  border-radius: 50% !important;
}
.avatar {
  color: #fff;
  background-color: #adb5bd;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 1rem;
  border-radius: 50%;
  height: 45px;
  width: 45px;
}

.avatar img {
  width: 100%;
  border-radius: 50%;
}

.avatar+.avatar-content {
  display: inline-block;
  margin-left: .75rem;
}

.avatar-lg {
  width: 58px;
  height: 58px;
  font-size: 0.875rem;
}

.avatar-sm {
  width: 40px;
  height: 40px;
  font-size: 0.875rem;
}

.avatar-group .avatar {
  position: relative;
  z-index: 2;
  border: 2px solid #fff;
}

.avatar-group .avatar:hover {
  z-index: 3;
}
**/
.user-img{
  width: 40px;
  height: 40px;
  background-color: #ccc;
  border-radius: 50%;
  overflow: hidden;
}

.user-img img{
  width: 100%;
}

  </style>
</head>
<body>
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
      <a href="signin"><button class="btn btn-color" type="button">Login</button></a>
        <a href="#"><span><i class="fas fa-cart-plus"></i></span></a>
        <!--//start profiles -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="user-img">
                <img alt="Image placeholder" src="../inc/img/05.png
">
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
        </ul>
       
      <!--ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img style="height: 40px; width: 40px;" src="../inc/img/02.png">
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Dashboard</a>
              <a class="dropdown-item" href="#">Notification</a>
              <a class="dropdown-item" href="#">Edit Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="./logout.php">LogOut</a>
            </div>
          </li>
      </ul-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-iconn"><i class="fas fa-grip-horizontal"></i></span>
      </button>

    </nav>