# Интернет-магазин на пхпхпхпхпхпхпхп
> \- ты че смеешся?<br>
\- я не смеюсь это названия япа дурак<br>
\- какая япа че несеш

Проект интернет-магазина, специализирующегося на товарах, связанных с бобрами.


## Установка и запуск проекта

1. **Склонируйте репозиторий** на локальную машину:
    ```bash
   git clone https://github.com/Sm4rtSt1ck/web-online-store

2. **Создайте базу данных** для проекта и импортируйте в неё структуру из файла, которого нет, поэтому думайте сами.

3. **Настройте подключение к базе данных.** В файле config.php укажите настройки для подключения:
    ```php
    define('DB_HOST', 'например_localhost');
    define('DB_NAME', 'название_бд');
    define('DB_USER', 'пользователь');
    define('DB_PASS', 'пароль');

4. **Запустите сервер** (например, с использованием Apache):
    - Убедитесь, что сервер Apache и база данных MySQL запущены.
    - Перейдите в браузер и откройте http://localhost:PORT/index.php.


## Основные страницы и функционал
- **Главная страница (home.php):** Описание магазина.
- **Каталог товаров (shop.php):** Список товаров с краткой информацией (цена, описание, изображение).
- **Детальная страница товара (product_detail.php):** Подробное описание товара с характеристиками. **(сори, нот имплементед)**
- **Авторизация (login.php):** Возможность входа для зарегистрированных пользователей.
- **Регистрация (register.php):** Форма регистрации для новых пользователей.
- **Профиль пользователя (profile.php):** Личный кабинет пользователя со списком покупок.
- **Корзина (cart.php):** Список выбранных товаров. **(сори, нот имплементед)**

## Используемые технологии
- **HTML/CSS:** Для создания структуры и стилей страниц.
- **JavaScript:** Для интерактивности (навигация, открытие информации о товаре). **(ну он как бы есть и как бы подключен но кода там как бы не особо много)**
- **PHP:** Для взаимодействия с базой данных и обработки данных.
- **MySQL:** Для хранения информации о товарах, пользователях и покупках.

## Ресурсы
- **Логотип:** [FlatIcon](https://www.flaticon.com/free-icon/beaver_2611873)
- **Шрифты:** [Google Fonts](https://fonts.google.com/specimen/Rubik+Wet+Paint)

## Отдельное спасибо
- **ChatGPT:** За помощь с формулировкой этого ридми и описания магазина.
- **StackOverFlow:** За помощь людей с исправлением ошибок с подключением БД.
- **Моим маме и папе:** За то, что родили и воспитали меня такого хорошего. Люблю их <3
