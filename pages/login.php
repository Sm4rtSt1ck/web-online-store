<h2>Вход</h2>
<?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
<form action="pages/process_login.php" method="POST" class="reg_login_form>
    <label for="username">Имя пользователя:</label>
    <br>
    <input type="text" name="username" required>
    <br>
    <br>
    <label for="password">Пароль:</label>
    <br>
    <input type="password" name="password" required>
    <br>
    <br>
    <button type="submit">Войти</button>
</form>
<p>Нет аккаунта? <a href="index.php?page=register">Зарегистрироваться</a></p>
