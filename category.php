<?php
declare(strict_types=1);
require_once __DIR__ . '/data/products.php';

$categories = getCategories();
$selectedCategory = isset($_GET['category']) ? strtolower(trim((string)$_GET['category'])) : '';
$allProducts = getAllProducts();

$isValidCategory = array_key_exists($selectedCategory, $categories);

if ($selectedCategory !== '' && !$isValidCategory) {
    http_response_code(404);
}

$filteredProducts = $isValidCategory
    ? array_values(array_filter($allProducts, fn(array $p): bool => $p['category'] === $selectedCategory))
    : [];

$pageTitle = $isValidCategory ? $categories[$selectedCategory] : 'Category';
require_once __DIR__ . '/includes/header.php';
?>

<div class="category-pills">
    <?php foreach ($categories as $slug => $label): ?>
        <a href="category.php?category=<?= escape($slug) ?>" class="pill <?= $selectedCategory === $slug ? 'active' : '' ?>">
            <?= escape($label) ?>
        </a>
    <?php endforeach; ?>
</div>

<?php if ($selectedCategory === ''): ?>
    <div class="alert">
        <p>Please select a category from the menu above to filter products.</p>
    </div>
<?php elseif (!$isValidCategory): ?>
    <div class="alert">
        <h2>404 &mdash; Category Not Found</h2>
        <p>The category <strong>"<?= escape($selectedCategory) ?>"</strong> does not exist.</p>
    </div>
<?php else: ?>
    <div class="section-header">
        <h1><?= escape($categories[$selectedCategory]) ?> (<?= count($filteredProducts) ?> items)</h1>
    </div>
    <div class="product-grid">
        <?php foreach ($filteredProducts as $product): ?>
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