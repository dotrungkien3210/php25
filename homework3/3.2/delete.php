<?php
session_start();

foreach($_SESSION['info'] as $key => $value){
       if ($_GET['id']== $value['ID']) {
       	unset($_SESSION['info'][$key]);
       	header('Location: list.php');
       }}


?>