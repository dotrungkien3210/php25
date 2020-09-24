<?php

class BaseController{
	public function view($path,$data = []){

		extract($data);
		
		require_once "views/".$path.".php";
	}
	/*gọi từ category.php, post.php user.php để return lại*/
	public function models($models){
		require_once "model/".$models.".php";
		return new $models;
	}
	public function redirect($path){
		header("location: ".$path);
	}
}



  ?>