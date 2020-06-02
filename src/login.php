<?php
define('header', TRUE);
require_once('header.php');

include_once('./gen/login.php');


?>

<div class="container-fluid">
  <div class="row">
    <div class="col-8"></div>
    <div class="col-md-4">

      <div style="background-color: red; color: white;" align="center">
      <?php 
        if( (isset($error_message)) && ($error_message!='') ):
          echo '<p>'.$error_message.'</p>';
        endif;
      ?>
      </div>

      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input name="username" type="text" class="form-control" placeholder="Enter email">
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
        <button type="submit" name="logoon" class="btn btn-color">SignIp</button>
      </form>
    </div>
    
  </div>
</div>

<?php 
define('footer', TRUE);
require_once('footer.php');
?>
                