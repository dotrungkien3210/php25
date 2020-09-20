<?php
require_once 'controllers/BaseController.php';
class AdminController extends BaseController{
	function __construct(){
			if ($_SESSION['login'] != true) {
				echo "đăng nhập thất bại";
				
				header("Location: index.php?mod=admin&act=login&c=auth");
			}
			echo "đăng nhập thành công đang ở Admin controller";
			die();
			
	}
}


  ?>