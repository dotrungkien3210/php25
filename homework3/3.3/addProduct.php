<?php
include_once 'list.php';
session_start();
  foreach($list['info'] as $key => $value){
  	if ($_GET['id']== $value['ID']) {
  		$_SESSION['cart'][] = $value;
  		print_r($_SESSION['cart']);
  			header('Location: cart.php');
  	}// hàm cart.php có tác dụng lưu sản phẩm dã mua va xóa sản phẩm

  }




  ?>