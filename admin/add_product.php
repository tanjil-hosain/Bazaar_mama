<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BazaarMama - Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="py-5">
    <div class="container" style="max-width: 850px;">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex gap-2">
                <a href="dashboard.php" class="btn btn-outline-dark border-0 fw-bold">
                    <i class="fa-solid fa-arrow-left me-2"></i> Back to Dashboard
                </a>
                <a href="../index.php" target="_blank" class="btn btn-outline-info fw-bold text-dark">
                    <i class="fa-solid fa-globe me-2"></i> Visit Site
                </a>
            </div>
            <span class="text-muted small font-monospace">Products Engine</span>
        </div>
        <?php if (!empty($msg)): ?>
            <div class="alert alert-<?= $type ?> alert-dismissible fade show rounded-3 shadow-sm mb-4" role="alert">
                <?= $msg ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <div class="card product-form-card">
            <div class="card-body p-5">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="bg-primary text-white d-flex align-items-center justify-content-center rounded-3" style="width: 48px; height: 48px;">
                        <i class="fa-solid fa-box-open fs-4"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold text-dark m-0">Upload Product</h4>
                        <p class="text-muted small m-0">Fill in details matching your e-commerce 12-field database schema</p>
                    </div>
                </div>
                <form action="add_product.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label class="form-label fw-semibold text-dark small">Description</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Write full specifications of the items..."></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-semibold text-dark small">Description</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Write full specifications of the items..."></textarea>
                    </div>

                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <label class="form-label fw-semibold text-dark small">SKU (Unique Code)</label>
                            <input type="text" name="sku" class="form-control" placeholder="e.g. BZ-WATCH-02" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-semibold text-dark small">Price (BDT)</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted">৳</span>
                                <input type="number" step="0.01" name="price" class="form-control" placeholder="0.00" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-semibold text-dark small">Stock Volume</label>
                            <input type="number" name="stock" class="form-control" placeholder="0" required>
                        </div>
                    </div>
                                        <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark small">Category Mapping</label>
                            <select name="category_id" class="form-select" required>
                                <option value="">-- Select Category --</option>
                                <?php foreach($categories as $cat): ?>
                                    <option value="<?= $cat['id'] ?>"><?= htmlspecialchars(isset($cat['category_name']) ? $cat['category_name'] : (isset($cat['name']) ? $cat['name'] : 'Category #'.$cat['id'])) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark small">Product Type Connection</label>
                            <select name="product_type_id" class="form-select" required>
                                <option value="">-- Select Type --</option>
                                <?php foreach($product_types as $pt): ?>
                                    <option value="<?= $pt['id'] ?>"><?= htmlspecialchars($pt['type_name']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>