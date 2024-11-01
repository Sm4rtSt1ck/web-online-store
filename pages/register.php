<h2>Регистрация</h2>
<?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
<form action="pages/process_register.php" method="POST">
    <label for="username">Имя пользователя:</label>
    <input type="text" name="username" required>
    <label for="email">Электронная почта:</label>
    <input type="email" name="email" required>
    <label for="password">Пароль:</label>
    <input type="password" name="password" required>
    <button type="submit">Зарегистрироваться</button>
</form>
<p>Уже есть аккаунт? <a href="index.php?page=login">Войти</a></p>
