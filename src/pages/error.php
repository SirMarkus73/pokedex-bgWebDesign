<?php require_once(__DIR__ . "/../services/imports.php") ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Fallido</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.webp">

</head>

<body>
    <?php
    render_component("loader");
    render_component("header");
    ?>

    <main class="flex flex-col items-center justify-center h-3/4 gap-5">
        <?php render_component("error/content") ?>
    </main>
</body>

</html>