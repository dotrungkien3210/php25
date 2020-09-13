<?php 
include_once 'model/Model.php';
/**
 * 
 */
class Post extends Model
{
    
    var $table = 'posts';

       function getAll(){
       // trr lại cái table được chọn
             return $this->select($this->table);
              
      }
}


 ?>