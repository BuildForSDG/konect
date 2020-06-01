<?php
include_once('keys.php');
	$error_message='';

	if(isset($_POST['logoon'])) {

		$userid 	= $_POST['username'];
		$pass 		= $_POST['password'];
	        
	    if(empty($userid) || empty($pass)) {
	        $error_message = 'Email and/or Password can not be empty<br>';
	    } else {
	    	$sql = "SELECT * FROM users WHERE email = '$userid'";
	        $query = $con->query($sql);
	        //$rows = $query->fetch_array();

	            if($query->num_rows > 0){
	                foreach($query as $row) { 
	                    $row_password = $row['password'];
	                }

	                if( $row_password != md5($pass) ) {
	                    $error_message = 'Password does not match<br>';
	                } else { 
	                //echo "you're good to go";      
	                    $_SESSION['user'] = $row;
	                    header("location: ./board.php");
	                }
	            }else{
	                $error_message = 'Email Address does not match<br>';
	                //return $error_message;
	            }
		}
	}

/**
 * 
 *
class kin
{
	public $king;

	public function k($abuya)
	{
		if ($abuya == 'kebbi') {
			$this->king = 'maza';
			return $this->king;
		}else{
			return 'kanawa';
		}

		if ($abuya == 'kir') {
			return 'kiri';
		}else{
			return 'baddi';
		}

	}
}

$ko = new kin();

$j = $ko->k('kekbbi');
echo $j;
**/
?>