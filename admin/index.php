<?php
require_once __DIR__ . "/../env.php";
require_once __DIR__ . "/../common/function.php";

//include model
require_once __DIR__ . "/../models/BaseModel.php";
require_once __DIR__ . "/../models/Category.php";
require_once __DIR__ . "/../models/Product.php";
//include controller
require_once __DIR__ . "/../controllers/admin/AdminProductController.php";
require_once __DIR__ . "/../controllers/admin/AdminCategoryController.php";
require_once __DIR__ . "/../controllers/admin/AdminUserController.php";
$ctl = $_GET['ctl'] ?? "";
match ($ctl) {
    "" => view("admin.dashboard"),
    "listsp"    => (new AdminProductController)->index(),
    "addsp"     => (new AdminProductController)->create(),
    'storesp'   => (new AdminProductController)->store(),
    'deletesp'  => (new AdminProductController)->delete(),
    "listcate"  => (new AdminCategoryController)->index(),
    "addcate"   => (new AdminCategoryController)->create(),
    "storecate" => (new AdminCategoryController)->store(),
    "editcate"  => (new AdminCategoryController)->update(),
    "listuser"  => (new AdminUserController)->index(),
    default => view("errors.404"),
};
