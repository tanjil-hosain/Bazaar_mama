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
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
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
            
            
        </div>
    </div>
</body>
</html>