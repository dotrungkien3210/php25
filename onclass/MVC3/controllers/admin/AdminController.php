<?php

class AdminController{
	function __construct(){
			if ($_SESSION['login']!= true) {
				header("Location: index.php?mod=admin&act=login&c=auth");
			}
	}
}


  ?>