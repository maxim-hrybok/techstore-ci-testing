<?php
declare(strict_types=1);
require_once __DIR__ . '/data/products.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$product = ($id !== null && $id !== false) ? getProductById($id) : null;

if ($product === null) {
    http_response_code(404);
    $pageTitle = 'Product Not Found';
    require_once __DIR__ . '/includes/header.php';
    ?>
    <div class="alert">
        <h2>404 &mdash; Product Not Found</h2>
        <p>The requested product ID does not exist in our catalog.</p>
        <p style="margin-top: 12px;"><a href="products.php" class="btn">Return to Catalog</a></p>
    </div>
    <?php
    require_once __DIR__ . '/includes/footer.php';
    exit;
}

// Compute related products in the same category
$related = array_filter(
    getAllProducts(),
    fn(array $item): bool => $item['category'] === $product['category'] && $item['id'] !== $product['id']
);
$related = array_slice(array_values($related), 0, 4);

$pageTitle = $product['name'];
require_once __DIR__ . '/includes/header.php';
?>

<div class="product-detail-box">
    <span class="badge"><?= escape($product['category']) ?></span>
    <h1><?= escape($product['name']) ?></h1>
    <div class="meta-row">
        <span><strong>SKU:</strong> <?= escape($product['sku']) ?></span>
        <span><strong>Rating:</strong> <?= number_format($product['rating'], 1) ?> / 5.0</span>
        <span><strong>Availability:</strong> <?= (int)$product['stock'] ?> in stock</span>
    </div>
    <div class="detail-price">$<?= number_format($product['price'], 2) ?></div>
    <p class="detail-desc"><?= escape($product['description']) ?></p>
    <div style="display: flex; gap: 12px; flex-wrap: wrap;">
        <a href="category.php?category=<?= escape($product['category']) ?>" class="btn">More in <?= escape(ucfirst($product['category'])) ?></a>
        <a href="products.php" class="btn btn-outline">Back to All Products</a>
    </div>
</div>

<?php if (!empty($related)): ?>
    <div class="section-header">
        <h2>Related Products</h2>
    </div>
    <div class="product-grid">
        <?php foreach ($related as $item): ?>
            <article class="product-card">
                <div>
                    <span class="badge"><?= escape($item['category']) ?></span>
                    <h3><a href="product.php?id=<?= (int)$item['id'] ?>"><?= escape($item['name']) ?></a></h3>
                    <p><?= escape($item['short_desc']) ?></p>
                </div>
                <div class="card-footer">
                    <span class="price">$<?= number_format($item['price'], 2) ?></span>
                    <a href="product.php?id=<?= (int)$item['id'] ?>" class="btn">Details</a>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>