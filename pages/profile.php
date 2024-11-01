<?php
include_once '../config.php';
include_once '../includes/db.php';

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Получение информации о пользователе из базы данных
$user_id = $_SESSION['user_id'];
$stmt = $connection->prepare("SELECT username, email, created_at FROM users WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h2>Профиль пользователя</h2>
    <p>Имя пользователя: <?php echo htmlspecialchars($user['username']); ?></p>
    <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
    <p>Дата регистрации: <?php echo htmlspecialchars($user['created_at']); ?></p>

    <a href="logout.php">Выйти</a>
</body>
</html>
