<?php 
include_once 'model/Model.php';
/**
 * 
 */
class Category extends Model
{
	var $table = 'categories';

	   function getAll(){

	         return $this->select($this->table);
	          
	  }
	  function create($data){

         return $this->insert($this->table,$data);
	  }
	 function showOne($id){
	 	return $this->detail($this->table,$id);
	 }
	  function editOne($id){
	  	
       
         return $this->editModel($this->table,$id);
	  }
	 function deleteOne($id){
	 
	 	return $this->delete($this->table,$id);

	 }

}








 ?>