<?php


/*$mod = $_GET['mod'];

$act =  isset($_GET['act']) ? $_GET['act'] : 'index';
// kiểm tra sự tồn tại của id
$params = [];
$id =  isset($_GET['id']) ? [$_GET['id']] : [];

$params[] = $id;

$data = $_POST;

$params[] = $data;


$class = ucfirst($mod)."Controller";//CategoryController
$path =  'controllers/' . $class . '.php';

if(!file_exists($path))
{
	return require_once 'views/post/list.php';
}

require_once $path;
$controler_obj = new $class();

call_user_func_array([$controler_obj,$act], $params);*/
define('URL', 'http://localhost:8080/phpzent/php25/project/MVC2/publics/');
define('URL_TENPLATE_CLIENT', 'http://localhost:8080/phpzent/php25/project/MVC2/publics/client/');
define('URL_TENPLATE_ADMIN', 'http://localhost:8080/phpzent/php25/project/MVC2/publics/admin/');
class App{
	private $mod = 'client';
	private $act = 'home';
	private $c = 'home';
	private $params = [];
	public function __construct(){
		if (isset($_GET['mod'])) {
			$this->mod  = $_GET['mod'];
		}
		if (isset($_GET['act'])) {
			$this->act  = $_GET['act'];
		}
		if (isset($_GET['c'])) {
			$this->c  = $_GET['c'];
		}
		$this->params  = isset($_GET['id']) ? [$_GET['id']] : [];;
		$this->params  = $_POST;

	}
	public function  action(){
			$class = ucfirst($this->c).ucfirst($this->mod)."Controller";
			$path ="controllers/".$this->mod."/$class.php";
			/*echo $path;
			die();*/
			if (!file_exists($path)) {
				return false;
			}
			require_once $path;
			$controler_obj = new $class();

call_user_func_array([$controler_obj,$this->act], $this->params);
	}
}
$app = new App();
$app->action();



  ?>