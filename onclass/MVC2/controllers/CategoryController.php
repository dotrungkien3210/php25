<?php
require_once 'model/Category.php';
require_once 'controllers/BaseController.php';

class CategoryController extends BaseController {
	protected $model;
	public function __construct(){
		$this->model = $this->models('Category');
	}

	public function index(){

      $model = new Category();
      $categories =   $model->select();
     
      $this->view('category/list.php',['categories'=>$categories]);
     /*require_once 'views/category/list.php';*/
	}
	public function create(){
		
		require_once 'views/category/create.php';

	}
	public function store($data){
		$model = new Category();
		$model->create($data);
		$this->redirect('index.php?mod=category&act=list');
		/*header("Location: index.php?mod=category&act=list");*/
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