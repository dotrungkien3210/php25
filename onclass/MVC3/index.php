<?php
define('URL', 'http://localhost:8080/phpzent/php25/onclass/MVC3/publics/');
session_start();
$mod = $_GET['mod'];// chọn một trong các file nằm trong admin

$act =  isset($_GET['act']) ? $_GET['act'] : 'index';// action
$c = $_GET['c'];//controller

$class = ucfirst($c) . ucfirst($mod) .'Controller';//CategoryAdminController


/*tóm lại là vào folder controller sau đó vào folder admin hoặc client và truy cập vào một trong các file mình muốn*/
$path ='controllers/'.$mod.'/'.$class.'.php';
require_once $path;
// kiểm tra sự tồn tại của id
$params = [];
$id =  isset($_GET['id']) ? [$_GET['id']] : [];

$params[] = $id;

$data = $_POST;

$params[] = $data;


/*$class = ucfirst($mod)."Controller";//CategoryController
$path =  'controllers/' . $class . '.php';*/

/*if(!file_exists($path))
{
	return require_once 'views/post/list.php';
}

require_once $path;*/

/*lấy ra một đối tượng cụ thể từ class trong file đó*/
$controler_obj = new $class();

call_user_func_array([$controler_obj,$act], $params);

  ?>