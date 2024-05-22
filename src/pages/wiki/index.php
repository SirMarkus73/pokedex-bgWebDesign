<?php
require_once __DIR__ . "/../../services/imports.php";
require_once __DIR__ . "/../../services/pokemons/get_pokemons.php"

/* @var $pokemons array */
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Pokefull - Wiki</title>
    <?php render_component("global/head"); ?>
</head>

<body>
<?php
render_component("global/loader");
render_component("global/header");
?>
<main>
    <form action="pokemon.php" method="get" class="m-0">

        <?php render_component("pokemon/searchbar", [
            "action" => "pokemon.php",
            "label" => "Buscar pokemon",
            "pokemons" => $pokemons,
        ]); ?>

    </form>

    <?php render_component("pokemon/pokemons_searcher", ["pokemons" => $pokemons]); ?>

</main>
</body>

</html>