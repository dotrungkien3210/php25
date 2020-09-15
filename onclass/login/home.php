<?php
session_start();
echo "vào home";
if (!$_SESSION['login']) {
	header('Location: login.php');
}


  ?>