<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
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
     <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand navbar-brand-custom fs-3" href="index.php">
                <i class="fa-solid fa-bag-shopping me-2 text-primary"></i>BAZAAR MAMA
            </a>
            <button class="navbar-collapse-toggle d-lg-none border-0 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <i class="fa-solid fa-bars fs-4 text-dark"></i>
            </button>
            
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3">
                    <li class="nav-item"><a class="nav-link nav-link-custom" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-custom" href="#">Shop All</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-custom" href="#">Categories</a></li>
                </ul>
                
                <div class="d-flex align-items-center gap-3">
                    <?php if(isset($_SESSION['user_name'])): ?>
                        <div class="dropdown">
                            <button class="btn btn-outline-dark border-0 fw-bold dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                <i class="fa-regular fa-user me-2"></i><?= htmlspecialchars($_SESSION['user_name']) ?>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end border-0 shadow mt-2 rounded-3">
                                <?php if($_SESSION['user_role'] == 'admin'): ?>
                                    <li><a class="dropdown-item py-2 fw-semibold" href="admin/dashboard.php"><i class="fa-solid fa-gauge me-2 text-primary"></i>Dashboard</a></li>
                                <?php endif; ?>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item py-2 text-danger fw-semibold" href="admin/dashboard.php?action=logout"><i class="fa-solid fa-arrow-right-from-bracket me-2"></i>Logout</a></li>
                            </ul>
                        </div>
                    <?php else: ?>
                        <a href="login.php" class="btn btn-outline-dark px-4 border-0 fw-semibold">Sign In</a>
                        <a href="registration.php" class="btn btn-modern-primary px-4 shadow-sm">Join Free</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>