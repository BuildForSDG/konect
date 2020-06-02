<?php
include_once('keys.php');

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

    public function Fetch($table)
    {
        $sql = "SELECT * FROM `$table`";
        $query = $this->conector->query($sql);
        
        $row = $query->fetch_array();
            
        return $row;  
    }

    public function product($table)
    {
        $sql = "SELECT * FROM ".$table;
        $sql .= " WHERE status = 1 ";
        $array = array();
        $query = $this->conector->query($sql);
        while ($row = $query->fetch_array()) {
			$array[] = $row;
		}
		return $array;
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

}


?>
