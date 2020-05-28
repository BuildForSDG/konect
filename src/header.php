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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-iconn"><i class="fas fa-grip-horizontal"></i></span>
      </button>

    </nav>