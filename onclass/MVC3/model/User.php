<?php 
include_once 'model/Model.php';
/**
 * 
 */
class User extends Model
{
	public function __construct(){
		parent::__construct();
		$this->table = 'users';
	}
}








 ?>