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

$query = " SELECT * FROM categories ";
// biến categories để lưu mảng dữ liệu
$categories = array();

$id = $_GET['id'];

$result = $conn->query($query);


// Trả về 1 bản ghi
$category = $result->fetch_assoc();

delete('categories',$id);

$status = delete('categories',$id);
if($status)
	header('Location: category_index.php');
else
	echo "that bai";



  ?>