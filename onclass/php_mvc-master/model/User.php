<?php
require_once 'model/model.php';
class User extends Model {
    public function __construct()
    {
        parent::__construct();
        $this->table = 'users';
    }
}

?>