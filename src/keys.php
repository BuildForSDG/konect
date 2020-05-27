<?php
/**
 * this class deals with our datatbase configuration
 */
class DBCon{

    private $host 		= 'localhost';
    private $username 	= 'konect';
    private $password 	= '*******';
    private $database 	= 'konect';
    
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