<?php
include_once '../config.php';
include_once '../includes/db.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Проверка пользователя в базе данных
    $stmt = $connection->prepare("SELECT user_id, password_hash FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password_hash'])) {
            $_SESSION['user_id'] = $user['user_id'];
            header("Location: profile.php");
            exit;
        } else {
            $error = "Неправильный пароль.";
        }
    } else {
        $error = "Пользователь не найден.";
    }
}
?>