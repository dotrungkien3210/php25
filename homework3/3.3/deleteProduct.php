<?php
include_once 'list.php';
session_start();
foreach($_SESSION['cart'] as $key => $value){
       if ($_GET['id']== $value['ID']) {
       	unset($_SESSION['cart'][$key]);
       	header('Location: cart.php');
       }}
// hạn chế là mình xài biến tính số lượng và tổng tiền vẫn dang l

  ?>