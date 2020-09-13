<?php


include_once "connection.php";
class Model
{
	var $conn;

	function __construct(){
    	
    	$connection  = new connection();
    	$this->conn = $connection->connect();
	}

    function select($table){
		$query = " SELECT * FROM ".$table;


		$result = $this->conn->query($query);

		$data = array();
		

		while($row = $result->fetch_assoc()) { 
			$data[] = $row;
		}

		return $data;
	}
function detail($table,$id){
	 $query = "SELECT * from ".$table." WHERE ".$table."_id = " . $id;


	$status = $this->conn->query($query);
	
	return $status;
}

// insert table để duyệt được 
function insert($table,$data){
	$query = "INSERT INTO $table ";
	$string1 = '';
	$string2 = '';
	$i = 0;
	foreach ($data as $column => $value) {
		$i++;
		$string1 .= $column;
		if ($i != count($data) ) {
			$string1 .= ',';
		}
		$string2 .= "'".$value."'";
		if ($i != count($data)) {
			$string2 .= ",";
		}
	}
	$string = '('.$string1.')'.' VALUES '.'('.$string2.')';
	
	$query = $query . $string;
	

	$status = $this->conn->query($query);
	return $status;
}
function fix($table,$data,$id){
	
	$query = "UPDATE $table SET ";
	$string = '';
	$stringtail = " WHERE id = $id;";
	$i = 0;
	foreach ($data as $column => $value) {
		$i++;
		if($i==1){
			continue;
		}
		$query = $query . $column.'='."'".$value."'";
		if ($i != count($data)) {
			$query .= ", ";
	}

}
	
	$query = $query . $string . $stringtail;

	$status = $this->conn->query($query);
	return $status;
}

function delete($table,$id){
	$query = "DELETE FROM $table WHERE id = '$id';";
	
	
	$status = $this->conn->query($query);
	return $status;
}

	
}





  ?>