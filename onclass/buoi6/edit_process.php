<?php
include '../helper/sql.php';


// Lấy dữ liệu từ form gửi lên, gán vào biến data
$data = $_POST;

$status = fix('categories',$data,$data['id']);
if($status)
	header('Location: database.php');
else
	echo "that bai";


/*$query = "UPDATE categories SET name =  '".$data["name"]."', description =  '".$data["description"] ."' WHERE id = 1 ;";


$status = $conn->query($query);
header('Location: database.php');*/
  ?>