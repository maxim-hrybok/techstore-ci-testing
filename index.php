<?php
declare(strict_types=1);
require_once __DIR__ . '/data/products.php';

$allProducts = getAllProducts();
$categories = getCategories();

// Server-side processing: select top-rated featured items
$featured = array_filter($allProducts, fn(array $p): bool => $p['rating'] >= 4.8);
$featured = array_slice(array_values($featured), 0, 8);

$pageTitle = 'Home';
require_once __DIR__ . '/includes/header.php';
?>

<section class="hero">
    <h1>Hardware &amp; Workspace Store</h1>
    <p>Lightweight PHP 8+ e-commerce storefront engineered for deterministic HTTP/HTTPS load testing and response-time benchmarking with WAPT.</p>
    <div style="display: flex; gap: 12px; flex-wrap: wrap;">
        <a href="products.php" class="btn">Browse Full Catalog (<?= count($allProducts) ?> Items)</a>
        <a href="search.php?q=keyboard" class="btn btn-outline">Sample Search: "keyboard"</a>
        <a href="performance.php?delay=500" class="btn btn-outline">Latency Simulation (500ms)</a>
    </div>
</section>

<div class="section-header">
    <h2>Browse by Category</h2>
</div>
<div class="category-pills">
    <?php foreach ($categories as $slug => $label): ?>
        <a href="category.php?category=<?= escape($slug) ?>" class="pill"><?= escape($label) ?></a>
    <?php endforeach; ?>
</div>

<div class="section-header">
    <h2>Featured Top-Rated Products</h2>
    <a href="products.php">View all &rarr;</a>
</div>

<div class="product-grid">
    <?php foreach ($featured as $product): ?>
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