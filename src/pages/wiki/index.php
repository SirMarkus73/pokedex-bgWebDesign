<?php require_once(__DIR__ . "/../../services/imports.php") ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiki Pokefull</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="icon" type="image/x-icon" href="../../assets/img/logo.webp">
</head>

<body>
    <?php
    render_component("global/loader");
    render_component("global/header");
    ?>
    <main>
        <?php
        render_component("pokemon/searchbar");
        render_component("pokemon/pokemons_searcher");
        ?>
    </main>
</body>

</html>