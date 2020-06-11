<?php
// Defining the website url
define("FARMWEB_URL", "http://localhost/2020/BuildForSDG/team045/konect-Backend/");

function escape($string) {
    //strip_tags();
        return htmlentities($string, ENT_QUOTES, 'UTF-8');
    }
/**
 * this class deals with our datatbase configuration
 */
 
class DBCon{

    private $host 		= 'localhost';
    private $username 	= 'root';
    private $password 	= '';
    private $database 	= 'farmkonect';
    
    protected $conector;
    
    public function __construct(){

        if (!isset($this->conector)) {
            
            $this->conector = new mysqli($this->host, $this->username, $this->password, $this->database);
            
            if (!$this->conector) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
        return $this->conector;
    }
}

?>