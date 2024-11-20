<?php
//Dieu khien san pham
class AdminProductController
{
    //Hien thi danh sach san pham
    public function index()
    {
        $products = (new Product)->all();
        return view('admin.products.list', compact('products'));
    }
    //Hien thi form them
    public function create()
    {
        $categories = (new Category)->list();
        return view('admin.products.add', compact('categories'));
    }
    //Them du lieu
    public function store()
    {
        $data = $_POST;
        $data['image'] = ''; //truong hop khong nhap anh
        $file = $_FILES['image'];
        if ($file['size'] > 0) {
            $image = $file['name'];
            //upload file 
            move_uploaded_file($file['tmp_name'], "../images/" . $image);
        }
        $data['image'] = $image;
        $product = new Product;
        $product->create($data);
        header("location: " . ADMIN_URL . "?ctl=listsp");
    }
    public function delete() {}
}
