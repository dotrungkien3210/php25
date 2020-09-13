<?php
require_once 'model/Category.php';

class CategoryController{
	public function list(){

      $model = new Category();
      $categories =   $model->getAll();
     
      
     require_once 'views/category/list.php';
	}
	public function create(){
         //nút create ở list gọi tới đây
		require_once 'views/category/create.php';

	}
	public function store($data){
		// form create trong  view category gửi đến đây
		$model = new Category();
		$model->create($data);
		header("Location: index.php?mod=category&act=list");
	}
	// hàm trả về giao diện mới
	public function show(){
          
          $id = $_GET['id'];
          $model = new Category();
          $model->showOne($id);
         require_once 'views/category/detail.php';
		
	}
	// hàm trả về giao diện mới
	public function edit($id){
       $model = new Category();
		$model->create($data);
		header("Location: index.php?mod=category&act=list");
	}
	// hàm xử lý cập nhật
	public function update($request,$id){
			 $model = new Category();
		$model->update($data);
	}
	// hàm xử lý xóa
	public function delete($id){
		  $id = $_GET['id'];
          $model = new Category();
          $model->deleteOne($id);
         header("Location: index.php?mod=category&act=list");
	}
}

  ?>