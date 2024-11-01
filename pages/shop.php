<section class="shop">
    <h1>Каталог товаров</h1>
    <div class="product-list">
        <?php
        // Получаем товары из базы данных и выводим их в виде карточек
        $query = "SELECT * FROM products";
        $result = mysqli_query($connection, $query);
        while ($product = mysqli_fetch_assoc($result)) {
            include 'templates/product_card.php'; // шаблон карточки товара
        }
        ?>
    </div>
</section>
