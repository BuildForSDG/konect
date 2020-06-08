<?php
include_once('keys.php');

/**
 * this class deals with must of the task to the project -- Model
 */
class model extends DBCon{
    public $error_message = '';
    
    public function update($table, $fields, $id)
	{
		$sql = "";
		$codition = "";
		foreach ($id as $key => $value) {
			$codition .= $key. "='".$value."' , ";
		}
		$codition = substr($codition, 0, -5);
		foreach ($fields as $key => $value) {
			// Update table SET name='' , qlt ='' where id = ''	
			$sql .= $key ."='".$value."', ";	
		}

		$sql = substr($sql, 0, -2);
		$sql = "UPDATE ".$table." SET ".$codition."' WHERE ".$sql;
		//echo $sql;
		$query 	= 	$this->conector->query($sql);

        if ($query) {
            return true;
        }
    }
    
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
    
    public function UpdateProduct($name, $id){
        // Getting img ID to delete it from folder

        $sql    = "";
        $sql    .= "UPDATE products SET ";
        $sql    .= "name=".$name;
        $sql    .= " WHERE id =".$id;
        $query = $this->conector->query($sql);
        
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

    public function product($table, $userid, $role = NULL)
    {
        switch ($role) {
            case 'Agent':
                $sql = "SELECT * FROM ".$table;
                $sql .= " WHERE userid =".$userid;
                $array = array();
                $query = $this->conector->query($sql);
                while ($row = $query->fetch_array()) {
                    $array[] = $row;
                }
                break;
            
            default:
                $sql = "SELECT * FROM ".$table;
                $array = array();
                $query = $this->conector->query($sql);
                while ($row = $query->fetch_array()) {
                    $array[] = $row;
                }
                break;
        }
		return $array;
    }

    public function viewTable($table)
    {
        $sql = "SELECT * FROM ".$table;
        $sql .= " WHERE status =1";
        $array = array();
        $query = $this->conector->query($sql);
        while ($row = $query->fetch_array()) {
            $array[] = $row;
        }
               
		return $array;
    }

    public function coutTables($table, $Id)
    {
        $sql = "SELECT * FROM ".$table;
        $sql .= " WHERE productId =".$Id;
        $query = $this->conector->query($sql);
        $tableCount = $query->num_rows;

        return $tableCount;
    }

    public function viewComment($productId)
    {
        $sql = "SELECT * FROM comments";
        $sql .= " WHERE productId =".$productId;
        $array = array();
        $query = $this->conector->query($sql);
        while ($row = $query->fetch_array()) {
            $array[] = $row;
        }
               
		return $array;
    }

    public function getUserName($Id)
    {
        $sql = "SELECT * FROM users";
        $sql .= " WHERE id =".$Id;
        $array = array();
        $query = $this->conector->query($sql);
        while ($row = $query->fetch_array()) {
            $array[] = $row;
        }
               
		return $array;
    }

    public function productPic($UniqId)
    {
        $sql = "SELECT * FROM `product_img` WHERE unique_Key ="."'".$UniqId."'";
        $array = array();
        $query = $this->conector->query($sql);
        while ($picRow = $query->fetch_array()) {
            $picture[] = $picRow;
        }
               
		return $picture;
    }

    public function productById($id)
    {
        $sql = "SELECT * FROM `products`";
        $sql .= " WHERE id = ".$id;
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
            return header('location: logout.php');
        } else {

        // Check the Requested id is valid or not
        $sql = "SELECT * FROM ".$table;
        $sql .= " WHERE id = ".$id;
        $array = array();
        $query = $this->conector->query($sql);
            while ($row = $query->fetch_array()) {
                $array[] = $row;
            }
            foreach ($array as $row) {
                $id = $row['id'];
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

        return true;
    }

    public function editProduct($id)
    {
        // Getting product name

        $sql    = "SELECT * FROM `products`";
        $sql    .= " WHERE id =".$id;
        $query = $this->conector->query($sql);
        while ($row = $query->fetch_array()) {
			$array[] = $row;
		}
        foreach ($array as $row) {
            $productImg = $row['name'];
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

        return true;
    }


}


?>
