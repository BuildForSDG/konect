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

        $db = "SELECT * FROM `$table` WHERE email = '$input' LIMIT 1";
        $query = $this->conector->query($db);

        if($query->num_rows > 0){
            $row = $query->fetch_array();
            return $row['email'];
        }
        else{
            return false;
        }
    }
}


?>
