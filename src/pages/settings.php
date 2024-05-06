<?php
require_once(__DIR__ . "/../services/imports.php");
require_once(__DIR__ . "/../services/protected_page.php");
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.webp">
</head>

<body id="settings">

    <?php
    require_once(__DIR__ . "/../services/loader.php");
    require_once(__DIR__ . "/../components/header.php")
    ?>
    <main class="p-6 flex flex-col gap-3">

        <h1 class="text-3xl font-bold text-center">Configuración</h1>
        <section class="border border-red-600 dark:border-fuchsia-700 py-3">
            <?php
            include_once(__DIR__ . "/../components/settings/change_image.php");
            include_once(__DIR__ . "/../components/settings/change_password.php");
            include_once(__DIR__ . "/../components/settings/change_username.php");
            include_once(__DIR__ . "/../components/settings/logout.php")
            ?>
        </section>
    </main>
</body>

</html>