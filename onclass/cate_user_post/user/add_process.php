<?php
include '../helper/sql.php';


$data = $_POST;


$status = insert('users',$data);
if($status)
	header('Location: user_index.php');
else
	echo "that bai";

?>