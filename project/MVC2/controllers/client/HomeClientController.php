<?php
require_once 'controllers/BaseController.php';
/**
 * 
 */

class HomeClientController extends BaseController
{

	function __construct()
	{
		# code...
	}
	public function home(){

		$this->view('client/layouts/master',['page'=>'home']);
	}
	public function category(){
		$this->view('client/layouts/master.php',['page'=>'category']);
	}
}




  ?>