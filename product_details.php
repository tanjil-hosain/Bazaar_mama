<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="index.php" class="btn btn-outline-dark border-0 fw-bold px-3 py-2 rounded-3" style="background: #e2e8f0;">
                <i class="fa-solid fa-arrow-left-long me-2"></i> Continue Shopping
            </a>
            <nav aria-label="breadcrumb" class="d-none d-md-block">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none fw-semibold text-muted">Home</a></li>
                    <li class="breadcrumb-item text-muted fw-semibold"><?= htmlspecialchars($product['cat_name'] ?? 'Category') ?></li>
                    <li class="breadcrumb-item active fw-bold text-dark" aria-current="page"><?= htmlspecialchars(mb_strimwidth($product['name'] ?? '', 0, 20, "...")) ?></li>
                </ol>
            </nav>
        </div>
        <div class="card glass-card p-4 p-md-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="preview-box border p-4 shadow-sm">
                        <?php if (($product['stock'] ?? 0) > 0): ?>
                            <span class="position-absolute top-0 start-0 m-3 badge bg-success text-white px-3 py-2 rounded-pill fw-bold" style="z-index: 5;"><i class="fa-solid fa-circle-check me-1"></i> In Stock</span>
                        <?php else: ?>
                            <span class="position-absolute top-0 start-0 m-3 badge bg-danger text-white px-3 py-2 rounded-pill fw-bold" style="z-index: 5;"><i class="fa-solid fa-circle-xmark me-1"></i> Stock Out</span>
                        <?php endif; ?>

                        <img src="assets/images/<?= htmlspecialchars($product['image'] ?? 'default.jpg') ?>" alt="<?= htmlspecialchars($product['name'] ?? 'Product Image') ?>" class="product-main-img img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>