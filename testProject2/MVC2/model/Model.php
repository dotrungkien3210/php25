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
function detail($table,$id){
	 $query = "SELECT * from ".$table." WHERE ".$table."_id = " . $id;
    

	$status = $this->conn->query($query);
	
	$data = array();
		

		while($row = $status->fetch_assoc()) { 
			$data[] = $row;
		}
		
		return $data;
}
function editModel($table,$id){
	
	$query = "SELECT * FROM $this->table where ".$this->table."_id = " . $id;
   
        $result = $this->conn->query($query);
    
        $status = $result->fetch_assoc();
        return $status;

}
function update($data , $id) {
        $string_1 = "";
        $i = 0;

        $query = "UPDATE  $this->table SET ";
        $query_1 = " where ".$this->table."_id = $id";

        foreach($data as $column => $value){
            $string_1 .= $column . " = " ."'". $value ."'";
            $i++;

            if($i == 0) {
                $value = $id;
            }
            if($i != count($data)) {
                $string_1 .= " , ";
            } 
        }
        
        $query = $query . $string_1 . $query_1;
        $status = $this->conn->query($query);
        return $status;
    }


function delete($table,$id){
	$query = "DELETE FROM $table WHERE ".$table."_id = '$id';";
	
	
	$status = $this->conn->query($query);
	return $status;
}
public function getByName($name) {
        $query = "SELECT * FROM $this->table where ".$this->table."_name=" . "'" .  $name . "'";

        $result = $this->conn->query($query);
        $user = $result->fetch_assoc();
        return $user;
    }
	
}





  ?>