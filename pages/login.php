<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h2>Вход</h2>
    <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
    <form action="../pages/process_login.php" method="POST">
        <label for="username">Имя пользователя:</label>
        <input type="text" name="username" required>
        <label for="password">Пароль:</label>
        <input type="password" name="password" required>
        <button type="submit">Войти</button>
    </form>
    <p>Нет аккаунта? <a href="register.php">Зарегистрироваться</a></p>
</body>
</html>
