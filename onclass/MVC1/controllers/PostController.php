<?php 
require_once 'model/Post.php';
class PostController{
	public function list(){
		$model = new Post();
		$posts = $model->getAll();
		
		require_once 'views/post/list.php';
	}
	// hàm trả về giao diện mới
	public function create(){

	}
	// hàm trả về giao diện mới
	public function store(){

	}
	// hàm trả về giao diện mới
	public function show(){

	}
	// hàm trả về giao diện mới
	public function edit($id){

	}
	// hàm xử lý cập nhật
	public function update($request,$id){

	}
	// hàm xử lý xóa
	public function delete($id){

	}
}


 ?>