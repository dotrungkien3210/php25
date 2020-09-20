<?php
require_once 'model/User.php';
require_once 'controllers/admin/AdminController.php';
class UserAdminController extends AdminController
{
	 private $model;

    public function __construct()
    {
        $this->model = new User();

    }
	
	public function index(){
		
		$this->view('admin/layouts/master',['page'=>'home']);
	}

public function list(){

      $users =    $this->model->getAll();
      $page  = 'user/list';
      require_once "views/admin/layouts/master.php";
      
    /* $this->view('admin/layouts/master',['page'=>'category/list']);*/
	}
	public function create(){
        $page  = 'user/create';
      require_once "views/admin/layouts/master.php";

	}
	public function store($data){
	$data =$_POST;
		 $this->model->create($data);
		header('Location: index.php?mod=admin&c=user&act=list');
	}
	// hàm trả về giao diện mới
	public function show(){
          
          $id = $_GET['id'];

         
         $users =   $this->model->showOne($id);
          $page  = 'user/detail';
      require_once "views/admin/layouts/master.php";
		
	}
	// hàm trả về giao diện mới
	public function edit(){
	 $id = $_GET['id'];
      $users = $this->model->editOne($id);
    $page  = 'user/edit';
      require_once "views/admin/layouts/master.php";   
	}
	// hàm xử lý cập nhật
	public function update(){
		$data= $_POST;
		$id = $_GET['id'];
         $users =   $this->model->updateOne($id , $data);
   header('Location: index.php?mod=admin&c=user&act=list');
	}
	// hàm xử lý xóa
	public function delete(){
		  $id = $_GET['id'];
          
          
            $this->model->deleteOne($id);
          
         header("Location: index.php?mod=admin&c=user&act=list");
	}
}



  ?>