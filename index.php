<?php
require './controller/auth/auth.php';
session_start();

if (isset($_GET['act'])) {
    $request = $_GET['act'];
    switch ($request) {
        case 'home':
            require_once __DIR__ . "/client/master.php";
            break;
        case 'about':
            require_once __DIR__ . "/client/about.php";
            break;
        case 'login':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $authController = new AuthController();
                $message = $authController->login($email, $password);
                echo $message;
            }
            require_once __DIR__ . "/client/login.php";
            break;
        case 'register':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $authController = new AuthController();
                $message = $authController->register($username, $email, $password);
                echo $message;
            }

            require_once __DIR__ . "/client/register.php";
            break;
        default:
            require_once __DIR__ . "/client/master.php";
            break;
    }
} else {
    require_once __DIR__ . "/client/master.php";
}
