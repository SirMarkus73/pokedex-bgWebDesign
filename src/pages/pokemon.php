<?php require_once(__DIR__ . "/../services/imports.php") ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.webp">

</head>

<body>
    <?php
    require_once(__DIR__ . "/../services/loader.php");
    require_once(__DIR__ . "/../components/header.php");
    ?>
    <main class="flex flex-col justify-center items-center h-3/4">

        <?php
        require_once(__DIR__ . "/../components/pokemon/searchbar.php");
        require_once(__DIR__ . "/../components/pokemon/get_pokemon.php");
        ?>
    </main>
</body>

</html>