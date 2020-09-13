<?php 
include_once 'model/Model.php';
/**
 * 
 */
class Post extends Model
{
	public function __construct(){
		parent::__construct();
		$this->table = 'posts';
	}
    
   /* var $table = 'posts';

       function getAll(){
       // trr lại cái table được chọn
             return $this->select($this->table);
              
      }*/
}


 ?>