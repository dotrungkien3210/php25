<?php
session_start();

$db_username = "kien";
$db_password = "123456";
$username = $_POST["username"];
$password = $_POST["password"];
if ($username==$db_username&&$password==$db_password) {
	echo "vào được";
	$_SESSION['login']=true;
    header('Location: profile.php');
}
else{
	$_SESSION['login']=false;
	echo "đăng nhập không thành công";
}

  ?>