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
                <div class="col-lg-6 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex gap-2 mb-3 align-items-center">
                            <span class="badge bg-primary-subtle text-primary meta-badge"><?= htmlspecialchars($product['type_name'] ?? 'Standard Product') ?></span>
                            <span class="badge bg-dark text-white meta-badge">SKU: <?= htmlspecialchars($product['sku'] ?? 'N/A') ?></span>
                        </div>

                        <h1 class="fw-extrabold text-dark mb-2" style="font-weight: 800; font-size: 2.2rem;"><?= htmlspecialchars($product['name'] ?? 'Unknown Product') ?></h1>

                        <div class="d-flex align-items-baseline gap-2 my-4">
                            <span class="price-display">৳<?= number_format($product['price'] ?? 0, 2) ?></span>
                            <span class="text-muted font-monospace small">/ Per <?= htmlspecialchars($product['short_name'] ?? 'Pcs') ?></span>
                        </div>

                        <hr class="opacity-25 my-4">

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="spec-pill d-flex align-items-center gap-3">
                                    <div class="bg-primary text-white rounded-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <i class="fa-solid fa-tags"></i>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block" style="font-size: 11px; font-weight:600; text-transform: uppercase;">Category</small>
                                        <span class="fw-bold text-dark"><?= htmlspecialchars($product['cat_name'] ?? 'General') ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="spec-pill d-flex align-items-center gap-3">
                                    <div class="bg-info text-white rounded-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <i class="fa-solid fa-folder-tree"></i>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block" style="font-size: 11px; font-weight:600; text-transform: uppercase;">Sub-Category</small>
                                        <span class="fw-bold text-dark"><?= htmlspecialchars($product['sub_cat_name'] ?? 'N/A') ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="spec-pill d-flex align-items-center gap-3">
                                    <div class="bg-success text-white rounded-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <i class="fa-solid fa-boxes-stacked"></i>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block" style="font-size: 11px; font-weight:600; text-transform: uppercase;">Available Volume</small>
                                        <span class="fw-bold text-dark"><?= htmlspecialchars($product['stock'] ?? 0) ?> <?= htmlspecialchars($product['short_name'] ?? '') ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="spec-pill d-flex align-items-center gap-3">
                                    <div class="bg-warning text-dark rounded-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <i class="fa-solid fa-scale-balanced"></i>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block" style="font-size: 11px; font-weight:600; text-transform: uppercase;">Measurement Unit</small>
                                        <span class="fw-bold text-dark"><?= htmlspecialchars($product['unit_name'] ?? 'Pieces') ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-file-lines text-muted me-2"></i>Product Overview:</h6>
                            <p class="text-secondary lh-lg bg-light p-3 rounded-3 border-start border-primary border-4" style="white-space: pre-line; font-size: 0.95rem;">
                                <?= !empty($product['description']) ? htmlspecialchars($product['description']) : 'No official description listed for this dynamic inventory stock items.' ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>