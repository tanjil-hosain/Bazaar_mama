<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BazaarMama - Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-light py-5">
    <div class="container" style="max-width: 850px;">
        <div class="mb-4">
            <a href="manage_products.php" class="btn btn-outline-dark border-0 fw-bold"><i class="fa-solid fa-arrow-left me-2"></i> Back to Inventory</a>
            <?php if (!empty($msg)): ?>
                <div class="alert alert-<?= $type ?> alert-dismissible fade show shadow-sm mb-4" role="alert">
                    <?= $msg ?><button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>
        </div>
        <div class="card border-0 shadow-sm rounded-4 bg-white p-5">
            <h4 class="fw-bold text-dark mb-4"><i class="fa-solid fa-pen-to-square text-primary me-2"></i> Edit Product Details</h4>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-4">
                    <label class="form-label fw-semibold small">Product Name</label>
                    <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($product['name']) ?>" required>
                </div>
                <div class="mb-4">
                    <label class="form-label fw-semibold small">Description</label>
                    <textarea name="description" class="form-control" rows="3"><?= htmlspecialchars($product['description']) ?></textarea>
                </div>
                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <label class="form-label fw-semibold small">SKU</label>
                        <input type="text" name="sku" class="form-control" value="<?= htmlspecialchars($product['sku']) ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-semibold small">Price (BDT)</label>
                        <input type="number" step="0.01" name="price" class="form-control" value="<?= $product['price'] ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-semibold small">Stock Volume</label>
                        <input type="number" name="stock" class="form-control" value="<?= $product['stock'] ?>" required>
                    </div>
                </div>
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold small">Category Mapping</label>
                        <select name="category_id" class="form-select" required>
                            <?php foreach ($categories as $cat): ?>
                                <option value="<?= $cat['id'] ?>" <?= $product['category_id'] == $cat['id'] ? 'selected' : '' ?>><?= htmlspecialchars($cat['name'] ?? $cat['category_name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold small">Product Type Connection</label>
                        <select name="product_type_id" class="form-select" required>
                            <?php foreach ($product_types as $pt): ?>
                                <option value="<?= $pt['id'] ?>" <?= $product['product_type_id'] == $pt['id'] ? 'selected' : '' ?>><?= htmlspecialchars($pt['type_name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold small">Sub-Category</label>
                        <select name="sub_category_id" class="form-select" required>
                            <?php foreach ($sub_categories as $subcat): ?>
                                <option value="<?= $subcat['id'] ?>" <?= $product['sub_category_id'] == $subcat['id'] ? 'selected' : '' ?>><?= htmlspecialchars($subcat['name'] ?? $subcat['sub_category_name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold small">Product Unit</label>
                        <select name="unit_id" class="form-select" required>
                            <?php foreach ($units as $u): ?>
                                <option value="<?= $u['id'] ?>" <?= $product['unit_id'] == $u['id'] ? 'selected' : '' ?>><?= htmlspecialchars($u['unit_name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="mb-5">
                    <label class="form-label fw-semibold small">Product Showcase Image (Leave empty to keep current)</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                    <div class="mt-2">Current: <img src="../<?= htmlspecialchars($product['image']) ?>" width="60" class="border rounded"></div>
                </div>

            </form>
        </div>
    </div>

</body>

</html>