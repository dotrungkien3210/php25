<?php

$mod = $_GET['mod'];
$act = $_GET['act'];


$class = ucfirst($mod)."Controller";//CategoryController
$path =  'controllers/' . $class . '.php';

require_once $path;


$controler_obj = new $class();
$controler_obj->$act();



/*require_once 'controllers/CategoryController.php';
$controler_obj = new CategoryController();
$controler_obj->list();*/


/*require_once 'controllers/PostController.php';
$controler_obj = new PostController();
$controler_obj->list();
*/
  ?>