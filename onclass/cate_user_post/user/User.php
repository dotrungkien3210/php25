<?php
include_once '../helper/Model.php';
/**
 * 
 */
class User extends Model
{
	
	var $table = 'users';

	   function getAll(){
	         return $this->select($this->table);
	          
	  }
}


?>