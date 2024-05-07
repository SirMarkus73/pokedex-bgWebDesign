<?php require_once(__DIR__ . "/../services/imports.php") ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.webp">
</head>

<body>
    <?php
    render_component("loader");
    render_component("header");
    ?>

    <main class="p-5 flex flex-col gap-5">

        <?php render_component("index/content") ?>

    </main>

</body>

</html>