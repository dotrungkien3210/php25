<?php 
require_once 'model/User.php';
class UserController{
	public function list(){
		$model = new User();
		$users = $model->getAll();

		require_once 'views/user/list.php';
	}
}


 ?>