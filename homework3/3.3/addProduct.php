<?php
include_once 'list.php';
session_start();// kiểm tra trùng thì tăng lên 
foreach($_SESSION['cart'] as $key=>$sessionx){
if($_GET['id']==$sessionx['ID']){ 
	$_SESSION['cart'][$key]['COUNT']++;
	echo $_SESSION['cart'][$key]['COUNT'];
header('Location: cart.php');
exit();
}}
  foreach($list['info'] as $key => $value){// add thêm sản phẩm nếu điều kiện trùng thất bại
  	if ($_GET['id']== $value['ID']) {
$_SESSION['cart'][] = $value;
header('Location: cart.php');
exit();
}
}


  ?>