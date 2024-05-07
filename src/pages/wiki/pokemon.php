<?php require_once(__DIR__ . "/../../services/imports.php") ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon</title>

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="icon" type="image/x-icon" href="../../assets/img/logo.webp">

</head>

<body>
    <?php
    render_component("global/loader");
    render_component("global/header");
    ?>
    <main class="flex flex-col justify-center items-center h-3/4">

        <?php
        render_component("pokemon/searchbar");
        render_component("pokemon/get_pokemon");
        ?>
    </main>
</body>

</html>