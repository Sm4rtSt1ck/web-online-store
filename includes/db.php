<?php
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (!$connection) {
    die('Ошибка подключения: ' . mysqli_connect_error());
}
?>
