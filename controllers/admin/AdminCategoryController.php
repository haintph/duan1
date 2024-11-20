<?php 
class AdminCategoryController{
    public function index(){
        $categories = (new Category)->list();
        return view('admin.categories.list',compact('categories'));
    }
    
    public function create(){
        return view('admin.categories.add');
    }
    public function store(){
        $data = $_POST;
        $data['img_category']='';
        $file = $_FILES['img_category'];
        if($file['size']>0){
            $img_category = $file['name'];
            move_uploaded_file($file['tmp_name'],"../images/" . $img_category);
        }
        $data['img_category']=$img_category;
        $categories = new Category;
        $categories->create($data);
        header("location:" .ADMIN_URL . "?ctl=listcate");
    }
    public function update(){
        return view('admin.categories.edit');
    }
}