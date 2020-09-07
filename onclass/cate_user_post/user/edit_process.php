<?php
include '../helper/sql.php';



$data = $_POST;


$status = user_edit('users',$data,$data['users_id']);


if($status)
	header('Location: user_index.php');
else
	echo "that bai";



  ?>