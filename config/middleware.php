<?php
define('ADMIN_URL', '/admin');


session_start();

function checkAdmin()
{
    var_dump($_SESSION['role']);
    if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
        header('Location: http://localhost/duan1');
        exit();
    }
}
