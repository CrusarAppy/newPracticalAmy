<?php
class Database {
    private $host = "localhost";
    private $db_name = "practicalamy";
    private $username = "root";
    private $password = "";
    public $conn;

    public function dbConnection() {
        $this->conn = null;
        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password,$this->db_name);
            if ($this->conn->connect_error) {
                die("Connection failed: ". $this->conn->connect_error);
            }
			else{
				echo "\n" . "Server connected ";
			}
        } catch(Exception $e) {
            echo "Connection error: ". $e->getMessage();
        }
        return $this->conn;
    }
	
	 public function createDatabase() {
        $this->conn = $this->dbConnection();
        $sql = "CREATE DATABASE ". $this->db_name;
		
        if ($this->conn->query($sql) === true) {
            echo "Database created successfully";
        } else {
            echo "Error creating database: ". $this->conn->error;
        }
    }
		
	
	public function createTable() {
        $this->conn = $this->dbConnection();
        $sql = "CREATE TABLE users (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(30) NOT NULL,
                email VARCHAR(50) Not Null
            )";

        if ($this->conn->query($sql)) {
            echo "Table Users created successfully";
        } else {
            echo "Error creating table: ". $this->conn->error;
        }
    }
}
?>