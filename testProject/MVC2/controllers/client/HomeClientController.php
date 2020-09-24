<?php
require_once 'controllers/BaseController.php';
require_once 'model/Post.php';
require_once 'controllers/admin/AdminController.php';

class HomeClientController extends BaseController
{

	function __construct()
	{
		$this->model = new Post();
	}
	public function home(){
		 $posts =    $this->model->getAll();
		
		 $page = 'home';
		 require_once "views/client/layouts/master.php";
	/*	$this->view('client/layouts/master',['page'=>'home']);*/
	}
	public function viewdetail(){
		$id = $_GET['id'];
		$posts =    $this->model->showOne($id);
		
		
		 require_once "views/client/viewdetail.php";
	}
}




  ?>