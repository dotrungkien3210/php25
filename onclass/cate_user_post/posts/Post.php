<?php
include_once '../helper/Model.php';
/**
 * 
 */
class Post extends Model
{
	
	var $table = 'posts';

	   function getAll(){
	         return $this->select($this->table);
	          
	  }
}


?>