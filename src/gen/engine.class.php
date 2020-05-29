<?php
include_once('keys.php');
function escape($string) {
        return htmlentities($string, ENT_QUOTES, 'UTF-8');
    }

/**
 * this class deals with must of the task to the project -- Model
 */
class model extends DBCon{
	
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
