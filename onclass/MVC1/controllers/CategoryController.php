<?php
require_once 'model/Category.php';
class CategoryController{
	public function list(){
      $model = new Category();
      $categories =   $model->getAll();
     
      
     require_once 'views/category/list.php';
	}
	public function create(){
		
	}
	public function store(){
		
	}
}

  ?>