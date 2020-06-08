<?php

defined('signupp') or 
die('<h2>404 Not Found.<em>You are caught!</em></h2>');

$error_message = '';
$User = new model();
$stateList = $User->state();

if (isset($_POST['signup_btn'])){  
$passs = escape($_POST['phone']);
$Iarray = array(
    'first_name'         =>  escape($_POST['fname']),
    'last_name'          =>  escape($_POST['lname']),
    'email'              =>  escape($_POST['email']),
    'phone'              =>  escape($_POST['phone']),
    'password'           =>  md5($passs),
    'gender'             =>  escape($_POST['gender']),
    'state'              =>  escape($_POST['state']),
    'residential_address'=>  escape($_POST['address']),
    'role'               =>  'User',
    'is_verified'        =>  0
);
    
        if ($Iarray['email'] == $User->authEmail("users", $Iarray['email'])) {
            $error_message = "Error you can duplicate input";
        }else{
        $addd = $User->InsertData('users', $Iarray);
        if (!$addd) {
            $error_message = " Having some certain error, check your input ";
        }else{
            $error_message = " Sucessfully Signup check your email for verification ";
        }
        }
}

?>

<div class="container-fluid">
  <div class="row">
    <div class="col-8"></div>
    <div class="col-md-4">

    <div style="color:red;" class="alert text-center">
        <?php echo $error_message; ?>
    </div>

      <form method="post" action="">
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
                                <label for="inputPhone">Phone <i style="color: red">*</i></label>
                                <input name="phone" type="tel" class="form-control" placeholder="phone number" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPhone">Password <i style="color: red">*</i></label>
                                <input name="pass" type="password" class="form-control" placeholder="Passsword" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">State <i style="color: red">*</i></label>
                                <select name="state" class="form-control" required>
                                <?php foreach ($stateList as $State) { $list = $State['name'];?>
                                    <option value="<?php echo $list;?>"><?php echo $list;?></option>
                                <?php }?>
                                </select>
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
                                <label for="inputAddress">Address <i style="color: red">*</i></label>
                                <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input name="accept" class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                do you agree with our <a href="#">terms an condition</a>
                                </label>
                            </div>
                        </div>
                        <button name="signup_btn" type="submit" class="btn btn-color">Signup</button><hr>
                    </form>
    </div>
    
  </div>
</div>
                