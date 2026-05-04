<?php
require_once 'config/db.php';
// Render header component cleanly
include_once 'includes/header.php';

// Fetch matching data from core relational structures
$products = $pdo->query('SELECT * FROM products ORDER BY id DESC')->fetchAll();
?>