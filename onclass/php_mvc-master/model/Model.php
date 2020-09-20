<?php
    include_once 'connection.php';
class Model {
    protected $connection;
    protected $table;

    function __construct() {
        $conn = new Connection();
        $this->connection = $conn->connect();
    }

    function select() {
        
        $query = "SELECT * FROM $this->table where 1";

        $result = $this->connection->query($query);

        $data = array();

        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }

        return $data;
    }


    function insert($data) {

        $string_1 = "";
        $string_2 = "";
        $i = 0;

        $query = "INSERT INTO $this->table ";

        foreach($data as $column => $value){
            $string_1 .= $column;
            $i++;

            if($i != count($data)) {
                $string_1 .= ",";
            }

            $string_2 .= "'" . $value . "'";
            if($i != count($data)) {
                $string_2 .= ",";
            }
        }

        $string = '(' . $string_1 .')' . ' VALUES ' . '(' . $string_2 .')';

        $query .= $string;
        return $status;

    }

    //==================================================
    function show_edit($id) {
        $query = "SELECT * FROM $this->table where id = " . $id;
    
        $result = $this->connection->query($query);
    
        $status = $result->fetch_assoc();
        return $status;
    }
    //==================================================
    function update($data , $id) {
        $string_1 = "";
        $i = 0;

        $query = "UPDATE  $this->table SET ";
        $query_1 = " where id = $id";

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

        $status = $this->connection->query($query);
        return $status;
    }

    public function delete($id) {

        $query = "DELETE FROM $this->table where id = " . $id;
        
        $result = $this->connection->query($query);

        return $result;
    }


    /*
    *Hàm tìm kiếm có điều kiện đưa ra 1 bản ghi
    *@params array $data
    */
    function first($data) {
        $string_1 = "";
        $i = 0;
        $query = "SELECT * FROM  $this->table WHERE ";
        foreach($data as $column => $value){
            $string_1 .= $column . " = " ."'". $value ."'";
            $i++;

            if($i != count($data)) {
                $string_1 .= " AND ";
            } 
        }

        $query = $query . $string_1;

        $result = $this->connection->query($query);
        return $result->fetch_assoc();
    }

    /*
    *Hàm tìm kiếm có điều kiện
    *@params array $data
    *@return array
    */
    public function findWhere($data)
    {
        $string_1 = "";
        $i = 0;
        $query = "SELECT * FROM  $this->table WHERE ";
        foreach($data as $column => $value){
            $string_1 .= $column . " = " ."'". $value ."'";
            $i++;

            if($i != count($data)) {
                $string_1 .= " AND ";
            } 
        }

        $query = $query . $string_1;

        $result = $this->connection->query($query);
        $data = array();

        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }

        return $data;
    }

    public function getUserByName($name) {
        $query = "SELECT * FROM $this->table where name=" . "'" .  $name . "'";

        $result = $this->connection->query($query);
        $user = $result->fetch_assoc();
        return $user;
    }
}

?>