<?php
require_once(__DIR__ . "/../services/imports.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiki Pokefull</title>

    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <?php require_once(__DIR__ . "/../components/header.php") ?>

    <main class="flex flex-col gap-3">
        <?php require_once(__DIR__ . "/../components/pokedex/searchbar.php") ?>
        <?php require_once(__DIR__ . "/../components/pokedex/pokemons_searcher.php") ?>
    </main>
</body>

</html>