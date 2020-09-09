<?php
include '../helper/sql.php';


$data = $_POST;


$status = insert('posts',$data);
if($status)
	header('Location: post_index.php');
else
	echo "that bai";

?>