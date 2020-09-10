<?php
/* mod và act là module và action
mod lấy ra 1 trong 3 là category user product
act thực hiện 1 trong các chức năng là create edit detail list trong file views category*/
$mod = $_GET['mod'];
$act = $_GET['act'];


$class = ucfirst($mod)."Controller";//CategoryController
$path =  'controllers/' . $class . '.php';
/*require_once một thư mục mà mình muốn trong folder controllers*/

require_once $path;

/*lấy ra một đối tượng cụ thể từ class trong file đó*/
$controler_obj = new $class();



$controler_obj->$act();

print_r($_POST);
die();



/*require_once 'controllers/CategoryController.php';
$controler_obj = new CategoryController();
$controler_obj->list();*/


/*require_once 'controllers/PostController.php';
$controler_obj = new PostController();
$controler_obj->list();
*/
  ?>