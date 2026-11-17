<?php
declare(strict_types=1);
require_once __DIR__ . '/data/products.php';

$products = getAllProducts();
$sort = isset($_GET['sort']) ? (string)$_GET['sort'] : 'default';

if ($sort === 'price_asc') {
    usort($products, fn(array $a, array $b): int => $a['price'] <=> $b['price']);
} elseif ($sort === 'price_desc') {
    usort($products, fn(array $a, array $b): int => $b['price'] <=> $a['price']);
} elseif ($sort === 'rating') {
    usort($products, fn(array $a, array $b): int => $b['rating'] <=> $a['rating']);
}

$pageTitle = 'All Products';
require_once __DIR__ . '/includes/header.php';
?>

<div class="section-header">
    <h1>Product Catalog (<?= count($products) ?> items)</h1>
    <div>
        <a href="products.php?sort=default" class="pill <?= $sort === 'default' ? 'active' : '' ?>">Default</a>
        <a href="products.php?sort=price_asc" class="pill <?= $sort === 'price_asc' ? 'active' : '' ?>">Price: Low to High</a>
        <a href="products.php?sort=price_desc" class="pill <?= $sort === 'price_desc' ? 'active' : '' ?>">Price: High to Low</a>
        <a href="products.php?sort=rating" class="pill <?= $sort === 'rating' ? 'active' : '' ?>">Top Rated</a>
    </div>
</div>

<div class="product-grid">
    <?php foreach ($products as $product): ?>
        <article class="product-card">
            <div>
                <span class="badge"><?= escape($product['category']) ?></span>
                <h3><a href="product.php?id=<?= (int)$product['id'] ?>"><?= escape($product['name']) ?></a></h3>
                <p><?= escape($product['short_desc']) ?></p>
            </div>
            <div class="card-footer">
                <span class="price">$<?= number_format($product['price'], 2) ?></span>
                <a href="product.php?id=<?= (int)$product['id'] ?>" class="btn">Details</a>
            </div>
        </article>
    <?php endforeach; ?>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>