<?php
require_once 'controllers/admin/AdminController.php'; 
class HomeAdminController extends AdminController{
    public function index()
    {
        $this->view('admin/server/layouts/master.php',[
            'page'=>'dashboard'
        ]);
    }
}
?>