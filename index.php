<?php
require_once 'config/db.php';
// Render header component cleanly
include_once 'includes/header.php';

// Fetch matching data from core relational structures
$products = $pdo->query('SELECT * FROM products ORDER BY id DESC')->fetchAll();
?>

<div class="container mt-4">
    
    <div class="hero-banner d-flex align-items-center">
        <div class="row align-items-center">
            <div class="col-md-7">
                <span class="badge bg-white text-primary fw-bold mb-3 px-3 py-2 rounded-pill">✨ Ramadan Exclusive Sale</span>
                <h1 class="display-4 fw-extrabold text-white mb-3" style="font-weight: 800;">Your Premium Shopping Destination</h1>
                <p class="lead text-white-50 mb-4">Discover curated trends dynamically loaded straight from our master inventories without standard authentication delays.</p>
                <a href="#" class="btn btn-light btn-lg px-4 py-3 fw-bold text-primary border-0 rounded-3 shadow-sm">Explore Collection <i class="fa-solid fa-arrow-right ms-2"></i></a>
            </div>
            <div class="col-md-5 d-none d-md-block text-end">
                <i class="fa-solid fa-store opacity-25" style="font-size: 200px; color: #fff;"></i>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-dark m-0">🔥 Trending Products</h3>
        <span class="text-muted small fw-semibold">Live Feed Output</span>
    </div>
