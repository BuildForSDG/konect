<?php
include_once('keys.php');
function escape($string) {
    //strip_tags();
        return htmlentities($string, ENT_QUOTES, 'UTF-8');
    }

/**
 * this class deals with must of the task to the project -- Model
 */
class model extends DBCon{
    public $error_message = '';
	
	public function InsertData($table,$fields){
        $db 	= 	"";
        $db 	.= 	"INSERT INTO ".$table;
        $db 	.= 	" (".implode(",", array_keys($fields)).") VALUES ";
        $db 	.= 	"('".implode("','", array_values($fields))."')";
        $query 	= 	$this->conector->query($db);

        if ($query) {
            return true;
        }else{
            false;
        }

    }

    public function authEmail($table,$input){

        $db = "SELECT * FROM $table WHERE email = '$input' LIMIT 1";
        $query = $this->conector->query($db);

        if($query->num_rows > 0){
            $row = $query->fetch_array();
            return $row['email'];
        }
        else{
            return false;
        }
    }

    public function signin($username, $password){
        $sql = "SELECT * FROM users WHERE email = '$username' && password = '$password'";
        $query = $this->conector->query($sql);
        $res = $query->fetch_array();

        if($query->num_rows > 0){
            foreach ($res as $key) {
                return $_SESSION['user'] = $row;
            }
            //$row = $query->fetch_array();
        }else{
            return false;
        }
    }
public $row_password;
    public function logg($userid, $pass){
        $sql = "SELECT * FROM users WHERE email = '$userid'";
        $query = $this->conector->query($sql);

            if($query->num_rows > 0){
                foreach($query as $row) { 
                    $this->row_password = $row['password'];
                }

                if( $this->row_password != md5($pass) ) {
                    $this->error_message = 'Password does not match<br>';
                } else {       
                    return $_SESSION['user'] = $row;
                    header("location: ./k.php");
                }
            }else{
                $this->error_message = 'Email Address does not match<br>';
                //return $error_message;
            }
    }
    /**
foreach($result as $row) { 
                $row_password = $row['password'];
            }
        
            if( $row_password != md5($password) ) {
                $error_message .= 'Password does not match<br>';
            } else {       
            
                $_SESSION['user'] = $row;
                header("location: index.php");
            }
    **/
    public function login($username, $password){
        if (empty($username) && empty($password)) {
            $_SESSION['message'] = 'do type something...';
            return $_SESSION['message'];
        }

        $sql = "SELECT * FROM users WHERE email = '$username' AND password = '$password'";
        $query = $this->conector->query($sql);

        if($query->num_rows > 0){
            $row = $query->fetch_array();
            return $row['id'];
        }
        else{
            return false;
        }
    }

    public function details($sql){

        $query = $this->conector->query($sql);
        
        $row = $query->fetch_array();
            
        return $row;       
    }
/**
    public function login(){
        if (isset($_POST['mm'])) {
            $email = '';
            $ps = '';
            if (empty($email)) {
                array_push($errors, 'Wrong email.')
            }
            if (empty($ps)) {
                array_push($errors, 'Wrong password.')
            }
            if (count($errors == 0)) {
                $pass = md5($ps);
                $query = "SELECT table FROM user = '$email', && password = '$ps' ";
                $rslt = mysqli_query($con, $query);
                if (mysqli_num($rslt)) {
                    $_SESSION['username'] = $email;
                    $_SESSION['password'] = $ps;
                    header('Location: home');
                }else{
                    array_push($errors, 'wrong username/email combination please try again.')
                }
            }
        }
    }
    **/
}


?>
