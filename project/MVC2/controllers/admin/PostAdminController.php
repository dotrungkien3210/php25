<?php
require_once 'model/Post.php';
require_once 'controllers/admin/AdminController.php';
class PostAdminController extends AdminController
{
	 private $model;

    public function __construct()
    {
        $this->model = new Post();

    }
	
	public function index(){
		
		$this->view('admin/layouts/master',['page'=>'home']);
	}

public function list(){

      $posts =    $this->model->getAll();
      $page  = 'post/list';
      require_once "views/admin/layouts/master.php";
      
    /* $this->view('admin/layouts/master',['page'=>'category/list']);*/
	}
	public function create(){
        $page  = 'post/create';
      require_once "views/admin/layouts/master.php";

	}
	public function store($data){
		$data['slug'] = $this->toSlug($data['tiltle']);
	$data =$_POST;
		 $this->model->create($data);
		header('Location: index.php?mod=admin&c=post&act=list');
	}
	// hàm trả về giao diện mới
	public function show(){
          
          $id = $_GET['id'];

         
         $posts =   $this->model->showOne($id);
          $page  = 'post/detail';
      require_once "views/admin/layouts/master.php";
		
	}
	// hàm trả về giao diện mới
	public function edit(){
	 $id = $_GET['id'];
      $posts = $this->model->editOne($id);
    $page  = 'post/edit';
      require_once "views/admin/layouts/master.php";   
	}
	// hàm xử lý cập nhật
	public function update(){
		$data['slug'] = $this->toSlug($data['tiltle']);
		$data= $_POST;
		$id = $_GET['id'];
         $posts =   $this->model->updateOne($id , $data);
   header('Location: index.php?mod=admin&c=post&act=list');
	}
	// hàm xử lý xóa
	public function delete(){
		  $id = $_GET['id'];
          
          
            $this->model->deleteOne($id);
          
         header("Location: index.php?mod=admin&c=post&act=list");
	}
}
function to_slug($str) {
    $str = trim(mb_strtolower($str));
    $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
    $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
    $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
    $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
    $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
    $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
    $str = preg_replace('/(đ)/', 'd', $str);
    $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
    $str = preg_replace('/([\s]+)/', '-', $str);
    return $str;
}


  ?>