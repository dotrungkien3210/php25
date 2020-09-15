<?php 
include_once 'model/Model.php';
/**
 * 
 */
class Category extends Model
{
	public function __construct(){
		parent::__construct();
		$this->table = 'categories';
	}



	/*var $table = 'categories';

	   function getAll(){

	         return $this->select($this->table);
	          
	  }
	  function create($data){
         return $this->insert($this->table,$data);
	  }*/
}


?>