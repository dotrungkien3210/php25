<?php
require_once 'model/Category.php';
require_once 'controllers/admin/AdminController.php';
class CategoryAdminController extends AdminController
{
	 private $model;

    public function __construct()
    {
        $this->model = new Category();

    }
	
	public function index(){
		
		$this->view('admin/layouts/master',['page'=>'home']);
	}

public function list(){

      $categories =    $this->model->getAll();
      $this->view('admin/layouts/master',['page'=>'category/list','categories'=>$categories]);
	}
	public function create(){
        $page  = 'category/create';
      require_once "views/admin/layouts/master.php";

	}
	public function store($data){
	$data =$_POST;
		 $this->model->create($data);
		header('Location: index.php?mod=admin&c=category&act=list');
	}
	// hàm trả về giao diện mới
	public function show(){
          
          $id = $_GET['id'];

         
         $categories =   $this->model->showOne($id);
          $page  = 'category/detail';
      require_once "views/admin/layouts/master.php";
		
	}
	public function edit(){
	 $id = $_GET['id'];
      $categories = $this->model->editOne($id);
    $page  = 'category/edit';
      require_once "views/admin/layouts/master.php";   
	}
	public function update(){
		$data= $_POST;
		$id = $_GET['id'];
         $categories =   $this->model->updateOne($id , $data);
   header('Location: index.php?mod=admin&c=category&act=list');
	}
	// hàm xử lý xóa
	public function delete(){
		  $id = $_GET['id'];
          
          
            $this->model->deleteOne($id);
          
         header("Location: index.php?mod=admin&c=category&act=list");
	}
}



  ?>