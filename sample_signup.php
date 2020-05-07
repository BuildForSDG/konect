<?php
//start session
session_start();

include_once('src/function.php');
user();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div align="center">
        <p>SignUp Page</p>
        <form class="form-signin" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            	
            <input type="text" name="name" required placeholder="Konect" />
                
            <input type="email" name="email" required placeholder="Email address" />
               
            <input type="password" name="password" required placeholder="********" />
            	
            <input type="text" name="state" required placeholder="Abuja" />
                
            <input type="text" name="address" required placeholder="No.01 .. street, ..." />
                
	        <select name="role">
	         <option>Buyyer</option>
	         <option>Agent</option>
	        </select><br>

            <button name="signup" type="submit">SignUp</button>
        </form>
         <div style="background-color: red; color: white; width: 15%" align="center">
             <?php
                if(isset($_SESSION['message'])){
                    ?>
                        <div class="alert alert-info text-center">
                            <?php echo $_SESSION['message']; ?>
                        </div>
                    <?php

                    unset($_SESSION['message']);
                }
            ?>
        </div>
    </div>

</body>
</html>
