<?php
require_once 'controllers/BaseController.php';
require_once 'model/User.php';
/**
 * 
 */
class AuthAdminController extends BaseController
{

	
	public function login(){
		$this->view('auth/login');
	}
	public function checkLogin(){
          // print_r($_POST);
          // die();
          $username = $_POST['username'];
          $password = $_POST['password'];
          $userModel = new User();
          $user = $userModel->getByName($username);
          
          if ($user) {
          	if ($user['users_password']==$password) {
                    $_SESSION['login'] = true;
          		
          		header("Location: index.php?mod=admin&act=index&c=category");
          	}
          	else{
                    $_SESSION['login'] = false;
                    echo "sai mat khau";
               }
          }
          else{
               $_SESSION['login'] = false;
          	echo "sai tai khoan";
          }
	}
     public function logout(){
          $_SESSION['login'] = false;
          header("Location: index.php?mod=admin&act=login&c=auth");
     }
}


  ?>