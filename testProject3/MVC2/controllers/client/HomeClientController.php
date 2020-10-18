<?php
require_once 'controllers/BaseController.php';
require_once 'model/Post.php';
require_once 'model/Category.php';
include_once 'model/Model.php';
require_once 'controllers/admin/AdminController.php';

class HomeClientController extends BaseController
{

	function __construct()
	{
		$this->model = new Post();
		$this->post_category = new Category();
		
	}
	public function home(){
		 $posts =    $this->model->getAll();
		
		
		$this->view('client/layouts/master',['page'=>'home','posts'=>$posts]);
	}
	public function viewdetail(){
		$id = $_GET['id'];
		$posts =    $this->model->showOne($id);
		
		
		 require_once "views/client/viewdetail.php";
	}
	/*hàm này để ta lấy bài viết dựa trên danh mục*/
	public function getCate(){
		$use = $_GET['use'];
	    $posts =  $this->model->getCateName($use);
	    
	  $this->view('client/layouts/master',['page'=>'getdata','posts'=>$posts]);        
	  }

	public function search($data){
		$model = new Post();
		$posts  = $model->searchName($data['data']['key']);
		$this->view('client/layouts/master',[
			'page'=>'home',
			'posts'=>$posts,
			'key'=>$data['data']['key']
		]);
	}
}




  ?>