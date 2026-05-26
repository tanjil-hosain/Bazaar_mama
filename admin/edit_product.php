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

            </form>
        </div>
    </div>

</body>

</html>