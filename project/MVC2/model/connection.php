<?php

class connection{
	private $servername;
	private $username;
	private $password;
	private $dbname;
	function __construct(){
		$this->servername = 'localhost';
		$this->username = 'root';
		$this->password = '';
		$this->dbname = 'php25buoi5';
	}
      public function connect(){

		$conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
	    if ($conn->connect_error) {
			echo "failed to connect".$conn->connect_error;
			exit();
	    }
	    return $conn;
	}


}



  ?>