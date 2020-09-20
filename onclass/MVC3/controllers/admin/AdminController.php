<?php
class AdminController{
	function __construct(){
			if ($_SESSION['login'] != true) {
				echo "đăng nhập thất bại";
				
				header("Location: index.php?mod=admin&act=login&c=auth");
			}
			echo "đăng nhập thành công";
			
	}
}


  ?>