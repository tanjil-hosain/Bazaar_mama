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
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>