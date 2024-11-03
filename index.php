<?php
session_start();
// Подключение к бд
include_once 'config.php';
include_once 'includes/db.php';
include_once 'includes/functions.php';

ob_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoberKurwaStore</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/logo-32.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'includes/header.php'; ?>

<main>
    <?php
    $page = $_GET['page'] ?? 'home';
    $allowed_pages = ['home', 'shop', 'contact', 'login', 'register', 'profile'];
    if (in_array($page, $allowed_pages)) {
        include "pages/{$page}.php";
    } else {
        include 'pages/home.php';
    }
    ?>
</main>

<?php include 'includes/footer.php'; ?>

<script src="assets/js/main.js"></script>
<script src="assets/js/loadEffect.js"></script>
<script src="assets/js/scrollEffect.js"></script>

</body>
</html>
