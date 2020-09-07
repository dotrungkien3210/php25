<?php
include '../helper/sql.php';



$data = $_POST;

$status = fix('categories',$data,$data['id']);


if($status)
	header('Location: database.php');
else
	echo "that bai";



  ?>