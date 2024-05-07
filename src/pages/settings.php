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
    render_component("header")
    ?>
    <main class="p-6 flex flex-col gap-3">

        <h1 class="text-3xl font-bold text-center">Configuración</h1>
        <section class="border border-red-600 dark:border-fuchsia-700 py-5 flex flex-col gap-10 justify-center text-center ">
            <?php
            render_component("settings/change_image");
            render_component("settings/change_password");
            render_component("settings/change_username");
            ?>
        </section>

        <section>
            <?php render_component("settings/logout") ?>
        </section>
    </main>
</body>

</html>