<?php
include '../helper/sql.php';


$data = $_POST;
$status = insert('categories',$data);
if($status)
	header('Location: database.php');
else
	echo "that bai";

?>