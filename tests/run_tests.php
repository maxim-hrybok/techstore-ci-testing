<?php
declare(strict_types=1);

require_once __DIR__ . '/../data/products.php';

$passed = 0;
$failed = 0;

function assertCondition(bool $condition, string $testName): void
{
    global $passed, $failed;
    if ($condition) {
        echo "[PASS] {$testName}\n";
        $passed++;
    } else {
        echo "[FAIL] {$testName}\n";
        $failed++;
    }
}

echo "=== Running TechStore Automated Test Suite ===\n\n";

// Test 1: Catalog item count
$products = getAllProducts();
assertCondition(count($products) === 24, "Catalog contains exactly 24 products");

// Test 2: Product data integrity
$validData = true;
foreach ($products as $p) {
    if (empty($p['name']) || $p['price'] <= 0 || $p['stock'] < 0) {
        $validData = false;
        break;
    }
}
assertCondition($validData, "All products have valid non-empty names, positive prices, and non-negative stock");

// Test 3: Valid product lookup by ID
$item1 = getProductById(1);
assertCondition($item1 !== null && $item1['name'] === 'Keychron K2 Mechanical Keyboard', "getProductById(1) returns Keychron K2 Mechanical Keyboard");

// Test 4: Non-existent product lookup returns null
$item999 = getProductById(999);
assertCondition($item999 === null, "getProductById(999) safely returns null");

// Test 5: Categories structure check
$categories = getCategories();
assertCondition(
    count($categories) === 4 && array_key_exists('electronics', $categories),
    "getCategories() returns 4 valid categories including 'electronics'"
);

// Test 6: Category filtering logic
$electronics = array_filter($products, fn(array $p): bool => $p['category'] === 'electronics');
assertCondition(count($electronics) === 7, "Electronics category contains exactly 7 items");

// Test 7: XSS escaping helper
$escaped = escape('<script>alert("xss")</script>');
assertCondition(!str_contains($escaped, '<script>'), "escape() neutralizes HTML/JS injection tags");

echo "\n=== Summary: {$passed} passed, {$failed} failed ===\n";

if ($failed > 0) {
    exit(1);
}
exit(0);