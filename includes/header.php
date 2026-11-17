<?php
declare(strict_types=1);
$currentQuery = isset($_GET['q']) ? (string)$_GET['q'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? escape($pageTitle) . ' | TechStore Benchmark' : 'TechStore Benchmark' ?></title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header class="site-header">
    <div class="container header-inner">
        <a href="index.php" class="logo">TechStore Benchmark</a>
        <nav class="main-nav">
            <a href="index.php">Home</a>
            <a href="products.php">All Products</a>
            <a href="category.php?category=electronics">Electronics</a>
            <a href="category.php?category=peripherals">Peripherals</a>
            <a href="category.php?category=audio">Audio</a>
            <a href="category.php?category=accessories">Accessories</a>
            <a href="performance.php?delay=500">Delay Test</a>
        </nav>
        <form action="search.php" method="GET" class="search-form">
            <input type="text" name="q" placeholder="Search products..." value="<?= escape($currentQuery) ?>">
            <button type="submit" class="btn">Search</button>
        </form>
    </div>
</header>
<main class="container">