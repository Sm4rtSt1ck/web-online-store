<?php
// Подключение к базе данных
include_once 'config.php';
include_once 'includes/db.php';
include_once 'includes/functions.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoberKurwaStore</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include 'includes/header.php'; ?> <!-- Подключаем шапку -->

<main>
    <?php
    // Загрузка контента в зависимости от запроса
    $page = $_GET['page'] ?? 'home';
    $allowed_pages = ['home', 'shop', 'contact'];
    if (in_array($page, $allowed_pages)) {
        include "pages/{$page}.php";
    } else {
        include 'pages/home.php';
    }
    ?>
</main>

<?php include 'includes/footer.php'; ?> <!-- Подключаем футер -->

<script src="assets/js/main.js"></script>
</body>
</html>
