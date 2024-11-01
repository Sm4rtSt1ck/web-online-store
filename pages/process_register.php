<?php
include_once '../config.php';
include_once '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $connection->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $error = "Пользователь с таким именем или электронной почтой уже существует.";
        header("Location: ../index.php?page=register&error=" . urlencode($error));
        exit;
    } else {
        $stmt = $connection->prepare("INSERT INTO users (username, password_hash, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $password_hash, $email);
        if ($stmt->execute()) {
            header("Location: ../index.php?page=login");
            exit;
        } else {
            $error = "Ошибка регистрации.";
            header("Location: ../index.php?page=register&error=" . urlencode($error));
            exit;
        }
    }
}
?>
