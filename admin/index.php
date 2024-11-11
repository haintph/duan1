<?php
include "../model/pdo.php";
include "../model/taikhoan.php";
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        
        case 'dskh':
            $list_taikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
    }
}
