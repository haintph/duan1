<?php
include "../model/pdo.php";
include "../model/taikhoan.php";
include "header.php";
require_once '../middleware/middleware.php';
require_once  '../controller/products/index.php';
checkAdmin();
if (isset($_GET['act'])) {
    $request = $_GET['act'];
    switch ($request) {
        case 'products-list':
            $authController = new ProductsController();
            $products = $authController->listProduct();
            include "products/index.php";
            break;
        case 'dskh':
            $list_taikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
    }
}
