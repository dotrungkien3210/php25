<?php

class connection{
	var $servername;
	var $username;
	var $password;
	var $dbname;
	
	function connect(){

		$severname = "localhost";
		$username = 'root';
		$password= '';
		$dbname = "php25buoi5";

		$conn = new mysqli($severname,$username,$password,$dbname);
	    if ($conn->connect_error) {
			echo "failed to connect".$conn->connect_error;
			exit();
	    }
	    return $conn;
	}


}



  ?>