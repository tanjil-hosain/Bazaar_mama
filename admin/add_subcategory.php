<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sub-Categories - BazaarMama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="sidebar">
        <div class="p-4 text-center" style="background:#0f172a;">
            <h4 class="text-info fw-bold m-0">BazaarMama</h4>
        </div>
        <div class="py-3">
            <a href="dashboard.php"><i class="fa-solid fa-chart-pie me-2"></i> Business Overview</a>
            <div class="px-4 py-2 text-uppercase text-muted small fw-bold">Configurations</div>
            <a href="add_product_type.php"><i class="fa-solid fa-layer-group me-2"></i> Product Types</a>
            <a href="add_category.php"><i class="fa-solid fa-tags me-2"></i> Categories</a>
            <a href="add_subcategory.php" class="active"><i class="fa-solid fa-folder-tree me-2"></i> Sub-Categories</a>
            <a href="add_unit.php"><i class="fa-solid fa-scale-balanced me-2"></i> Product Units</a>
            <div class="px-4 py-2 text-uppercase text-muted small fw-bold">Products</div>
            <a href="add_product.php"><i class="fa-solid fa-plus me-2"></i> Add Product</a>
            <a href="manage_products.php"><i class="fa-solid fa-boxes-stacked me-2"></i> Available Products</a>
        </div>
    </div>

    <div class="main-content">
        <div class="container-fluid" style="max-width: 700px; margin-left: 0;">
            <h3 class="fw-bold text-dark mb-4"><i class="fa-solid fa-folder-tree text-success me-2"></i>Sub-Categories Setup</h3>

            <?php if (!empty($msg)): ?><div class="alert alert-success border-0 shadow-sm"><?= $msg ?></div><?php endif; ?>
            <div class="card border-0 shadow-sm p-4 rounded-4 bg-white mb-4">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label fw-semibold text-secondary">Select Product Type</label>
                        <select name="product_type_id" class="form-select bg-light" required>
                            <option value="">-- Choose Product Type --</option>
                            <?php foreach ($types as $t): ?><option value="<?= $t['id'] ?>"><?= $t['type_name'] ?></option><?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-semibold text-secondary">Sub-Category Name</label>
                        <input type="text" name="subcat_name" class="form-control bg-light" placeholder="e.g. T-Shirt, Gadgets" required>
                    </div>
                    <button type="submit" name="add_subcategory" class="btn btn-success w-100 py-2.5 fw-bold shadow-sm text-white"><i class="fa-solid fa-plus me-2"></i>Add Sub-Category</button>
                </form>
            </div>




        </div>
    </div>
</body>

</html>