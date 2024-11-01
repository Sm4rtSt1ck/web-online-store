<h2>Регистрация</h2>
<?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
<form action="pages/process_register.php" method="POST" class="reg_login_form">
    <label for="username">Имя пользователя:</label>
    <br>
    <input type="text" name="username" required>
    <br>
    <br>
    <label for="email">Электронная почта:</label>
    <br>
    <input type="email" name="email" required>
    <br>
    <br>
    <label for="password">Пароль:</label>
    <br>
    <input type="password" name="password" required>
    <br>
    <br>
    <button type="submit">Зарегистрироваться</button>
</form>
<p>Уже есть аккаунт? <a href="index.php?page=login">Войти</a></p>
