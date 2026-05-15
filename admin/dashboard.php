<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}
require_once '../config/db.php';


if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    $_SESSION = array();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
    session_destroy();
    header("Location: ../login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="sidebar">
        <div class="brand text-center">
            <h4 class="text-info fw-bold m-0"><i class="fa-solid fa-shop me-2"></i>BazaarMama</h4>
        </div>
        <div class="py-3">
            <a href="dashboard.php" class="active"><i class="fa-solid fa-chart-pie me-2"></i> Business Overview</a>
            <div class="px-4 py-2 text-uppercase text-white small fw-bold" style="font-size: 11px; letter-spacing: 1px; opacity: 0.6;">Configurations</div>
            <a href="add_product_type.php"><i class="fa-solid fa-layer-group me-2"></i> Product Types</a>
            <a href="add_category.php"><i class="fa-solid fa-tags me-2"></i> Categories</a>
            <a href="add_subcategory.php"><i class="fa-solid fa-folder-tree me-2"></i> Sub-Categories</a>
            <a href="add_unit.php"><i class="fa-solid fa-scale-balanced me-2"></i> Product Units</a>


            <div class="px-4 py-2 text-uppercase text-white small fw-bold" style="font-size: 11px; letter-spacing: 1px; opacity: 0.6;">Products</div>
            <a href="add_product.php"><i class="fa-solid fa-plus me-2"></i> Add Product</a>
            <a href="manage_products.php"><i class="fa-solid fa-boxes-stacked me-2"></i> Available Products</a>

            <div class="sidebar-footer-buttons d-grid gap-2">
                <a href="../index.php" target="_blank" class="btn btn-sm btn-info text-dark fw-bold py-2">
                    <i class="fa-solid fa-globe me-2"></i> Visit Site
                </a>

            </div>

        </div>
    </div>
</body>

</html>