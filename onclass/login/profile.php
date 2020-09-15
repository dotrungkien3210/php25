<?php
echo "vào profile";
session_start();
if (!S_SESSION['login']) {
	header('Location: login.php');
}
else{
	header('Location: home.php');
}


  ?>