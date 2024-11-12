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
        case 'logout':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $authController = new AuthController();
                $message = $authController->logout();
                echo $message;
            }
            header("Location: http://localhost/duan1/index.php");
            break;
        case 'me':
            $mesgg = "";
            $username = "";
            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
            } else {
                $mesgg = "Bạn cần đăng nhập";
            }
            require_once __DIR__ . "/client/account.php";
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
