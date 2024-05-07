<?php require_once(__DIR__ . "/../../services/imports.php") ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php render_component("global/head", ["title" => "Pokefull - Wiki"]) ?>
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