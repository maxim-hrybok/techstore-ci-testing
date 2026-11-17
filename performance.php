<?php
declare(strict_types=1);
require_once __DIR__ . '/data/products.php';

$startTime = hrtime(true);

// Validate and clamp delay between 0 ms and 5000 ms (5 seconds max for server safety)
$rawDelay = filter_input(INPUT_GET, 'delay', FILTER_VALIDATE_INT);
$delayMs = ($rawDelay !== null && $rawDelay !== false) ? $rawDelay : 500;
$delayMs = max(0, min(5000, $delayMs));

if ($delayMs > 0) {
    usleep($delayMs * 1000);
}

// Perform lightweight data aggregation to simulate backend processing
$products = getAllProducts();
$totalInventoryValue = array_reduce(
    $products,
    fn(float $carry, array $item): float => $carry + ($item['price'] * $item['stock']),
    0.0
);

$elapsedMs = (hrtime(true) - $startTime) / 1_000_000;

$pageTitle = 'Performance Delay Experiment';
require_once __DIR__ . '/includes/header.php';
?>

<div class="product-detail-box">
    <span class="badge">Benchmark Endpoint</span>
    <h1>Controlled Server-Side Delay Experiment</h1>
    <p class="detail-desc">
        This endpoint introduces an artificial processing delay using PHP <code>usleep()</code> to demonstrate how backend latency impacts WAPT response times and throughput (RPS).
    </p>

    <div class="meta-row">
        <span><strong>Configured Delay:</strong> <?= $delayMs ?> ms</span>
        <span><strong>Measured PHP Execution Time:</strong> <?= number_format($elapsedMs, 2) ?> ms</span>
        <span><strong>Catalog Items Processed:</strong> <?= count($products) ?></span>
        <span><strong>Total Stock Valuation:</strong> $<?= number_format($totalInventoryValue, 2) ?></span>
    </div>

    <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: 20px;">
        <a href="performance.php?delay=0" class="btn <?= $delayMs === 0 ? '' : 'btn-outline' ?>">0 ms (No Delay)</a>
        <a href="performance.php?delay=250" class="btn <?= $delayMs === 250 ? '' : 'btn-outline' ?>">250 ms</a>
        <a href="performance.php?delay=500" class="btn <?= $delayMs === 500 ? '' : 'btn-outline' ?>">500 ms (Default)</a>
        <a href="performance.php?delay=1000" class="btn <?= $delayMs === 1000 ? '' : 'btn-outline' ?>">1000 ms</a>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>