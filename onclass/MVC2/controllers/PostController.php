<?php 
require_once 'model/Post.php';
require_once 'controllers/BaseController.php';
class PostController extends BaseController {
	protected $model;
	public function __construct(){
		$this->model = $this->models('Post');
	}

	public function index()
	{
		$this->view('layouts/master',[
			'page'=>'post/index'
		]);
	}

	public function list(){
		$model = new Post();
		$posts = $model->select();
		
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