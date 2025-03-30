<?php
session_start();

require_once __DIR__ . '/../connect.php';
require_once __DIR__ . '/admin.php';

use Connect\Connection;
use Admin\User;

$user = new User(Connection::connect(), $_SESSION['username'], $_SESSION['email'], '');

if (!$user->getIsAdmin()) {
    header("Location: ../index.php?error=not_admin");
    exit;
}

$tableUsers = $user->selectAll("users");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/output.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/darkmode.css">

    <!-- * favicon -->
    <link rel="icon" sizes="57x57" href="../assets/images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/favicon/apple-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/favicon/apple-icon-precomposed.png">
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="36x36" href="../assets/images/favicon/android-icon-36x36.png">
    <link rel="icon" type="image/png" sizes="48x48" href="../assets/images/favicon/android-icon-48x48.png">
    <link rel="icon" type="image/png" sizes="72x72" href="../assets/images/favicon/android-icon-72x72.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/favicon/android-icon-96x96.png">
    <link rel="icon" type="image/png" sizes="144x144" href="../assets/images/favicon/android-icon-144x144.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/favicon/favicon-96x96.png">
    <link rel="manifest" href="../assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../assets/images/favicon/ms-icon-70x70.png">
    <meta name="msapplication-TileImage" content="../assets/images/favicon/ms-icon-144x144.png">
    <meta name="msapplication-TileImage" content="../assets/images/favicon/ms-icon-150x150.png">
    <meta name="msapplication-TileImage" content="../assets/images/favicon/ms-icon-310x310.png">
    <meta name="theme-color" content="#ffffff">
    <title>coppy</title>
</head>

<body class="flex justify-center items-center w-full h-fit font-[exo2-regular]">
    <div class="space-y-5 m-10">
        <h1 class="font-[exo2-bold] text-5xl text-center">Dashboard admin</h1>

        <div class="flex justify-center items-center">
            <?php
            if ($tableUsers->num_rows > 0) {
                echo '<div class="overflow-x-auto">';
                echo '<table class="bg-white border border-gray-300 min-w-full">';
                echo '<thead class="bg-gray-700">';
                echo '<tr>
                        <th class="px-6 py-3 font-[exo2-bold] text-white text-xs text-left uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 font-[exo2-bold] text-white text-xs text-left uppercase tracking-wider">Username</th>
                        <th class="px-6 py-3 font-[exo2-bold] text-white text-xs text-left uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 font-[exo2-bold] text-white text-xs text-left uppercase tracking-wider">Role</th>
                    </tr>';
                echo '</thead>';
                echo '<tbody classwhite">';

                while ($row = $tableUsers->fetch_assoc()) {
                    echo '<tr class="even:bg-gray-200 odd:bg-white">';
                    echo '<td class="px-6 py-4 whitespace-nowrap">' . $row["id"] . '</td>';
                    echo '<td class="px-6 py-4 whitespace-nowrap">' . $row["username"] . '</td>';
                    echo '<td class="px-6 py-4 whitespace-nowrap">' . $row["email"] . '</td>';
                    echo '<td class="px-6 py-4 whitespace-nowrap">' . ($row["is_admin"] ? "Admin" : "User") . '</td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
                echo '</div>';
            } else {
                echo "Không có người dùng nào!";
            }
            ?>
        </div>

        <div class="flex justify-center">
            <a href="../index.php" class="bg-gray-700 px-6 py-2 rounded text-white hover:scale-102 active:scale-98 transition-all duration-300">Back to Home</a>
        </div>
    </div>
</body>

</html>