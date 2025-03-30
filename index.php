<?php
session_start();

// Kiểm tra nếu SESSION hoặc COOKIE tồn tại, nếu không thì chuyển hướng đến login
if (
    (!isset($_SESSION["username"]) || !isset($_SESSION["email"])) &&
    (!isset($_COOKIE["username"]) || !isset($_COOKIE["email"]))
) {
    header("Location: ./pages/login.php");
    exit();
}

// Nếu chỉ có cookie mà không có session, khôi phục session từ cookie
if (!isset($_SESSION["username"]) && isset($_COOKIE["username"])) {
    $_SESSION["username"] = $_COOKIE["username"];
}
if (!isset($_SESSION["email"]) && isset($_COOKIE["email"])) {
    $_SESSION["email"] = $_COOKIE["email"];
}
if (!isset($_SESSION["isAdmin"]) && isset($_COOKIE["isAdmin"])) {
    $_SESSION["isAdmin"] = $_COOKIE["isAdmin"];
}

// session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/output.css">

    <link rel="stylesheet" href="./assets/css/style.css">
    <link id="theme-style" rel="stylesheet" href="./assets/css/darkmode.css">

    <!-- * favicon -->
    <link rel="icon" sizes="57x57" href="./assets/images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="./assets/images/favicon/apple-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="./assets/images/favicon/apple-icon-precomposed.png">
    <link rel="apple-touch-icon" sizes="57x57" href="./assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="36x36" href="./assets/images/favicon/android-icon-36x36.png">
    <link rel="icon" type="image/png" sizes="48x48" href="./assets/images/favicon/android-icon-48x48.png">
    <link rel="icon" type="image/png" sizes="72x72" href="./assets/images/favicon/android-icon-72x72.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/images/favicon/android-icon-96x96.png">
    <link rel="icon" type="image/png" sizes="144x144" href="./assets/images/favicon/android-icon-144x144.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/images/favicon/favicon-96x96.png">
    <link rel="manifest" href="./assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./assets/images/favicon/ms-icon-70x70.png">
    <meta name="msapplication-TileImage" content="./assets/images/favicon/ms-icon-144x144.png">
    <meta name="msapplication-TileImage" content="./assets/images/favicon/ms-icon-150x150.png">
    <meta name="msapplication-TileImage" content="./assets/images/favicon/ms-icon-310x310.png">
    <meta name="theme-color" content="#ffffff">
    <title>BAO MINH</title>
</head>

<body class="font-[exo2-regular] space">

    <?php
    include './includes/navbar.php';
    include './includes/header.php';
    include './includes/footer.php';
    include './includes/back-to-top.php'
    ?>

    <script src="./assets/js/main.js"></script>
</body>

</html>