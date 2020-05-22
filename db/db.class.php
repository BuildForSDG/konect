<?PHP

/**
 * 
 */
class DB
{

	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $database = 'CREATE DATABASE IF NOT EXISTS konect';
	
	public $conn;

	public function Connection()
	{
		$this->conn = null;

		try {
			$this->conn = new PDO("mysql:host=$this->host", $this->username, $this->password);
			$this->conn->exec("set names utf8");
			$this->conn->exec($this->database);
		} catch (PDOException $er) {
			echo "Error: ".$er->getMessage();
		}

		return $this->conn;
	}
}

?>