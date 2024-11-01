<?php
include_once '../config.php';
include_once '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Хеширование пароля для безопасности
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Проверка уникальности имени пользователя и электронной почты
    $stmt = $connection->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $error = "Пользователь с таким именем или электронной почтой уже существует.";
    } else {
        // Добавление нового пользователя в базу данных
        $stmt = $connection->prepare("INSERT INTO users (username, password_hash, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $password_hash, $email);
        if ($stmt->execute()) {
            header("Location: login.php");
            exit;
        } else {
            $error = "Ошибка регистрации.";
            // header("Location: register.php");
            // exit;
        }
    }
}
?>