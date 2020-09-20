<?php
require_once 'model/model.php';
class Post extends Model {
    public function __construct()
    {
        parent::__construct();//Kế thừa lại biến connection của class Model
        $this->table = 'posts';//Khai báo tên table cho model
    }
}

?>