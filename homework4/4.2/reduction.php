<?php
session_start();

foreach($_SESSION['cart'] as $key=>$sessionx){
if($_GET['id']==$sessionx['ID']){ 
	if ($_SESSION['cart'][$key]['COUNT'] > 1) {
	$_SESSION['cart'][$key]['COUNT']--;
	header('Location: cart.php');
	exit();
	}
	else{
	unset($_SESSION['cart'][$key]);
	header('Location: cart.php');
	exit();
}

}
}

  ?>
