<?php
include '../helper/sql.php';


$data = $_POST;
$status = insert('categories',$data);
if($status)
	header('Location: category_index.php');
else
	echo "that bai";

?>