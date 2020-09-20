<?php
require_once 'model/Post.php';
require_once 'controllers/admin/AdminController.php';

class PostAdminController extends AdminController {

    private $model;

    public function __construct()
    {
        $this->model = new Post();
    }

    public function index() {
        $posts = $this->model->select();
        $this->view('Post/list.php' , ['posts' => $posts]);
    }

    public function create() {
        $this->view('Post/add_process.php' , []);
    }

    public function store($data) {
        $data['slug'] = $this->toSlug($data['name']);
        $this->model->insert($data);
        $this->redirect('index.php?mod=post&act=list');
    }

    public function show($id) {

        $post = $this->model->first($id);

        $this->view('Post/detail.php' , ['posts' => $post]);
    }

    public function edit($id) {
        $post = $this->model->first($id);
        $this->view('Post/edit_process.php' , ['post' => $post]);
    }

    public function update($id , $data) {
        $this->model->update($id , $data);
        $this->redirect('index.php?mod=post&act=list');
    }

    public function destroy($id) {
        $this->model->delete($id);
        $this->redirect('index.php?mod=post&act=list');
    }

    public function toSlug($str) {
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }
}
?>