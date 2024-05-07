<?php require_once(__DIR__ . "/../../services/imports.php") ?>

<html lang="es">

<head>
    <meta charset='utf-8'>

    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href="../../css/style.css">
    <link rel="icon" type="image/x-icon" href="../../assets/img/logo.webp">
</head>

<body>
    <?php
    render_component("global/loader");
    render_component("global/header")
    ?>

    <main class="grid grid-cols-1 place-items-center md:grid-cols-3 content-center p-5 justify-center">
        <?php render_component("register/content") ?>

    </main>

</body>

</html>