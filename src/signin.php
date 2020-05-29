<?php
  //start session
session_start();
include_once('./gen/function.php'); 
if(isset($_SESSION["user"])){
  header("location: ./home.php");
}
logIn();
?>
<?php require_once('header.php');?>

<div class="container-fluid">
  <div class="row">
    <div class="col-8"></div>
    <div class="col-md-4">

      <div style="background-color: red; color: white;" align="center">
        <?php
          if(isset($_SESSION['message'])){?>
            <div class="alert alert-info text-center">
              <?php echo $_SESSION['message']; ?>
            </div>
        <?php } ?>
      </div>

      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input name="username" type="email" class="form-control" placeholder="Enter email">
          <small class="form-text">error ...</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input name="password" type="password" class="form-control" placeholder="Password">
          <small class="form-text">error ...</small>
        </div>
        <div class="form-group form-check">
          <input name="check" type="checkbox" class="form-check-input">
          <label class="form-check-label" for="exampleCheck1">Keep me login</label>
        </div>
        <button type="submit" name="signInBtn" class="btn btn-color">SignIp</button>
      </form>
    </div>
    
  </div>
</div>

<?php require_once('footer.php');?>
                  <i class="fas fa-envelope"></i>
                  </span>
                  <span class="icon is-small is-left">
                  <i class="fas fa-lock"></i>
                  </span>
                