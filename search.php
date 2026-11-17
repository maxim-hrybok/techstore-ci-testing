<?php
declare(strict_types=1);
require_once __DIR__ . '/data/products.php';

$query = isset($_GET['q']) ? trim((string)$_GET['q']) : '';
$allProducts = getAllProducts();
$results = [];

if ($query !== '') {
    $needle = mb_strtolower($query, 'UTF-8');
    foreach ($allProducts as $product) {
        $haystack = mb_strtolower(
            $product['name'] . ' ' . $product['category'] . ' ' . $product['short_desc'] . ' ' . $product['description'],
            'UTF-8'
        );
        if (str_contains($haystack, $needle)) {
            $results[] = $product;
        }
    }
} else {
    $results = $allProducts;
}

$pageTitle = $query !== '' ? 'Search: ' . $query : 'Search Products';
require_once __DIR__ . '/includes/header.php';
?>

<div class="section-header">
    <h1>
        <?php if ($query !== ''): ?>
            Search Results for "<?= escape($query) ?>" (<?= count($results) ?> found)
        <?php else: ?>
            All Products (Enter a search term above)
        <?php endif; ?>
    </h1>
</div>

<?php if (empty($results)): ?>
    <div class="alert">
        <p>No products matched your search query <strong>"<?= escape($query) ?>"</strong>.</p>
        <p style="margin-top: 10px;">Try searching for <code>keyboard</code>, <code>wireless</code>, <code>monitor</code>, or <code>USB-C</code>.</p>
    </div>
<?php else: ?>
    <div class="product-grid">
        <?php foreach ($results as $product): ?>
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
<?php endif; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>