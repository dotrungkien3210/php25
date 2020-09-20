<?php
require_once 'model/Category.php';

class CategoryController{
	 private $model;

    public function __construct()
    {
        $this->model = new Category();
    }



	public function list(){

      
      $categories =    $this->model->getAll();
   
      
     require_once 'views/category/list.php';
	}
	public function create(){
         //nút create ở list gọi tới đây
		require_once 'views/category/create.php';

	}
	public function store($data){
		// form create trong  view category gửi đến đây
		
		 $this->model->create($data);
		header("Location: index.php?mod=category&act=list");
	}
	// hàm trả về giao diện mới
	public function show(){
          
          $id = $_GET['id'];

         
         $categories =   $this->model->showOne($id);

         require_once 'views/category/detail.php';
		
	}
	// hàm trả về giao diện mới
	public function edit(){
	 $id = $_GET['id'];
		 
      $categories = $this->model->editOne($id);
      
     require_once 'views/category/edit.php';
	}
	// hàm xử lý cập nhật
	public function update(){
		$data= $_POST;
		$id = $_GET['id'];
		/*echo $data['id'];
		print_r($data);
		die();*/
			
         $categories =   $this->model->updateOne($id , $data);
    header("Location: index.php?mod=category&act=list");    
	}
	// hàm xử lý xóa
	public function delete(){
		  $id = $_GET['id'];
          
          
            $this->model->deleteOne($id);
          
         header("Location: index.php?mod=category&act=list");
	}
}

  ?>