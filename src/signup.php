<?php
define('header', TRUE);
require_once('header.php');

include_once('./gen/function.php');
user();
?>


<div class="container-fluid">
	<div class="row">
		<div class="col-8"></div>
		<div class="col-md-4">
			<div style="background-color: red; color: white;" align="center">
            <?php
                if(isset($_SESSION['farmkonectmessage'])){
                    ?>
                    <div class="alert alert-info text-center">
                    <?php echo $_SESSION['farmkonectmessage']; ?>
                    </div>
                    <?php
                }
            ?>
        	</div>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		        <div class="form-row">
		          <div class="form-group col-md-6">
		            <label for="inputname">First Name <i style="color: red">*</i></label>
		            <input name="fname" type="text" class="form-control" placeholder="First Name" required>
		          </div>
		          <div class="form-group col-md-6">
		            <label for="inputname">Last Name <i style="color: red">*</i></label>
		            <input name="lname" type="text" class="form-control" placeholder="Last Name" required>
		          </div>
		        </div>
		        <div class="form-row">
		          <div class="form-group col-md-6">
		            <label for="inputEmail4">Email <i style="color: red">*</i></label>
		            <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
		          </div>
		          <div class="form-group col-md-6">
		            <label for="inputPassword4">Password</label>
		            <input name="pass" type="password" class="form-control" placeholder="Password" required>
		          </div>
		        </div>
		        <div class="form-row">
		        	<div class="form-group col-md-6">
		        		<label for="inputGender">Gender</label><br>
		        		<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="gender" value="m">
						  <label class="form-check-label" for="inlineRadio1">Male</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="gender" value="f">
						  <label class="form-check-label" for="inlineRadio2">Female</label>
						</div>
		        	</div>
		        	<div class="form-group col-md-6">
		          		<label for="inputState">State <i style="color: red">*</i></label>
		            		<select name="st" class="form-control">
		              		<option selected>Choose...</option>
		              		<option value="kano">Kano</option>
		              		<option value="bauchi">Nigeria</option>
		            		</select>
		            </div>
		        </div>
		        <div class="form-group">
		          <label for="inputAddress">Address <i style="color: red">*</i></label>
		          <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
		        </div>
		        <div class="form-group">
		          <div class="form-check">
		            <input name="accept" class="form-check-input" type="checkbox" id="gridCheck">
		            <label class="form-check-label" for="gridCheck">
		              do you agree with our <a href="#">terms an condition</a>
		            </label>
		          </div>
		        </div>
		        <button name="signup" type="submit" class="btn btn-color">Sign Up</button><hr>
		    </form>
		    <div style="background-color: red; color: white;" align="center">
            <?php
                if(isset($_SESSION['farmkonectmessage'])){
                    ?>
                    <div class="alert alert-info text-center">
                    <?php echo $_SESSION['farmkonectmessage']; ?>
                    </div>
                    <?php
                    unset($_SESSION['farmkonectmessage']);
                }
            ?>
        	</div>
		</div>
		
	</div>
</div>

<?php 
define('footer', TRUE);
require_once('footer.php');
?>