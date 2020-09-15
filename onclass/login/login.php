<?php
session_start();
// var_dump($_SESSION['login'])
/*if ($_SESSION['login']) {
	header('Location: home.php');
}*/


  ?>


<!DOCTYPE html>
<html>
<head>
	<title>trang dang nhap</title>
</head>
<body>
	<form method="POST" action ="loginProcess.php">
		<input type="test" name="username"      size="30" placeholder="username">
		<input  type="password" name="password" size="30" placeholder="password">
		<input  type="submit" name="btn_submit" value="đăng nhập">
	</form>
	

</body>
</html>