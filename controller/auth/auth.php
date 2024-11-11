<?php
require_once  './model/pdo.php';
class AuthController
{

    public function register($username, $email, $password)
    {
        $sql = "SELECT * FROM users WHERE email = ? OR username = ?";
        $existingUser = pdo_query($sql, $email, $username);

        if (!empty($existingUser)) {
            return "Email và username này đã được đăng ký!";
        }


        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $result = pdo_execute($sql, $username, $email, $hashedPassword);
        if ($result > 0) {
            return "Đăng ký thành công!";
        } else {
            return "Đã xảy ra lỗi, vui lòng thử lại!";
        }
        header("Location: /client/login.php");
        exit;
    }

    public function login($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email = ?";
        $user = pdo_query($sql, $email);
        if (!$user) {
            return "Email không tồn tại!";
        }
        if (password_verify($password, $user[0]['password'])) {
            $_SESSION['user_id'] = $user[0]['id'];
            $_SESSION['username'] = $user[0]['username'];
            $_SESSION['role'] = $user[0]['role'];
            return "Đăng nhập thành công!";
        } else {
            return "Mật khẩu sai!";
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        return "Đăng xuất thành công!";
    }
}
