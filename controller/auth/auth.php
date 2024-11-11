<?php

require_once  './model/pdo.php';
class AuthController
{

    public function register($username, $email, $password)
    {
        $sql = "SELECT * FROM users WHERE email = ?";
        $existingUser = pdo_query($sql, $email);
        if ($existingUser) {
            return "Email này đã được đăng ký!";
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $GLOBALS['db']->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$username, $email, $hashedPassword]);

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

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
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
