<?php
require_once("../services/imports/php.php");
require_once("../components/pokemons.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiki Pokefull</title>
    <?php require_once("../services/imports/html.php") ?>
</head>

<body class="dark:bg-neutral-800 dark:text-white">
    <?php require("../components/header.php") ?>

    <main class="grid grid-cols-5 justify-center w-max mx-auto gap-20">
        <?php show_pokemons(10, 0) ?>
    </main>
</body>

</html>