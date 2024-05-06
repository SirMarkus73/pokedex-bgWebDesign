<?php require_once(__DIR__ . "/../services/imports.php") ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiki Pokefull</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.webp">
</head>

<body>
    <?php
    require_once(__DIR__ . "/../services/loader.php");
    require_once(__DIR__ . "/../components/header.php");
    ?>
    <main>
        <?php
        require_once(__DIR__ . "/../components/pokedex/searchbar.php");
        require_once(__DIR__ . "/../components/pokedex/pokemons_searcher.php");
        ?>
    </main>
</body>

</html>