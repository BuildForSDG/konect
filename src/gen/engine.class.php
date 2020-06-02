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
            $_SESSION['farmkonectmessage'] = 'do type something...';
            return $_SESSION['farmkonectmessage'];
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

    public function authId($table, $id)
    {
        if(!isset($id)) {
            header('location: logout.php');
            exit;
        } else {

            // Check the Requested id is valid or not
            $sql = "SELECT * FROM ".$table;
            $sql .= " WHERE id =".$id;
            $query = $this->conector->query($sql);

        if($query->num_rows == 0){
            header('location: logout.php');
            exit;
        }else{ 
            return $id;
        }
        }
    }

    public function delProduct($id)
    {
        // Getting img ID to delete it from folder

        $sql    = "SELECT * FROM `products`";
        $sql    .= " WHERE id =".$id;
        $query = $this->conector->query($sql);
        while ($row = $query->fetch_array()) {
			$array[] = $row;
		}
        foreach ($array as $row) {
            $productImg = $row['img_key'];
        }

        // Unlink the images
        if($productImg!='') {
            unlink('./inc/ufl/'.$productImg);	
            //header('location: ./src/product.php');
        }

        // Delete from product
        $sql    = "DELETE FROM `products`";
        $sql    .= " WHERE id =".$id;
        $query  = $this->conector->query($sql);

        // Delete Procuct comment
        $sql    = "DELETE FROM `comments`";
        $sql    .= " WHERE id =".$id;
        $query  = $this->conector->query($sql);
    /**
        $statement = $this->conector->prepare("DELETE FROM tbl_news WHERE news_id=?");
        $statement->execute(array($_REQUEST['id']));
   **/     
        return true;
    }


}


?>
