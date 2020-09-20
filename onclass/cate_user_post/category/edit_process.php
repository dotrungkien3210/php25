<?php
include_once '../helper/sql.php';

include_once '../helper/connection.php';

$severname = "localhost";
$username = 'root';
$password= '';
$dbname = "php25buoi5";
$conn = new mysqli($severname,$username,$password,$dbname);
if ($conn->connect_error) {
	echo "failed to connect".$conn->connect_error;
	exit();
}


$data = $_POST;
echo "đã vào process";
print_r($data);
die();
$status = edit('categories',$data,$data['id']);


if($status)
	header('Location: category_index.php');
else
	echo "that bai";



  ?>