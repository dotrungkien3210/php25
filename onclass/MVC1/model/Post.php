<?php 
include_once 'model/Model.php';
/**
 * 
 */
class Post extends Model
{
	class Post extends Model {
    public function __construct()
    {
        parent::__construct();//Kế thừa lại biến connection của class Model
        $this->table = 'posts';//Khai báo tên table cho model
    }
}
}
?>
