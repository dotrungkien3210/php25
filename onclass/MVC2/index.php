<?php
define('URL', 'http://localhost:8080/phpzent/php25/onclass/MVC2/publics/');
/* mod và act là module và action
mod lấy ra 1 trong 3 là category user product
act thực hiện 1 trong các chức năng là create edit detail list trong file views category*/
$mod = $_GET['mod'];

$act =  isset($_GET['act']) ? $_GET['act'] : 'index';
// kiểm tra sự tồn tại của id
$params = [];
$id =  isset($_GET['id']) ? [$_GET['id']] : [];

$params[] = $id;

$data = $_POST;

$params[] = $data;


$class = ucfirst($mod)."AdminController";//CategoryController
$path =  'controllers/admin/' . $class . '.php';

if(!file_exists($path))
{
	return require_once 'views/post/list.php';
}

require_once $path;

/*lấy ra một đối tượng cụ thể từ class trong file đó*/
$controler_obj = new $class();

call_user_func_array([$controler_obj,$act], $params);

  ?>