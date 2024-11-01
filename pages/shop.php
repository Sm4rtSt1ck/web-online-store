<?php
// Подключаем конфигурацию и базу данных
include_once './config.php';
include_once './includes/db.php';

// Получаем все продукты из базы данных
$query = "SELECT * FROM products";
$result = $connection->query($query);
?>

<h2>Наши товары</h2>

<?php if ($result->num_rows > 0): ?>
    <div class="product-list">
        <?php while ($product = $result->fetch_assoc()): ?>
            <div class="product-item">
                <img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="product-image">
                <h3 class="product-name"><?php echo htmlspecialchars($product['name']); ?></h3>
                <p class="product-desc"><?php echo htmlspecialchars($product['description']); ?></p>
                <p>Цена: <?php echo htmlspecialchars($product['price']); ?>₽</p>
                <p>В наличии: <?php echo htmlspecialchars($product['stock']); ?></p>
                <button class="add-to-cart">Добавить в корзину</button>
            </div>
        <?php endwhile; ?>
    </div>
<?php else: ?>
    <p>Нет доступных товаров.</p>
<?php endif; ?>
