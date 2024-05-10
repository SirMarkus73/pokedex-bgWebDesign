<?php
require_once __DIR__ . "/../../services/imports.php";
require_once __DIR__ . "/../../services/pokemons/get_pokemons.php"
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php render_component("global/head", ["title" => "Pokefull - Wiki"]); ?>
</head>

<body>
    <?php
    render_component("global/loader");
    render_component("global/header");
    ?>
    <main>
        <form action="pokemon.php" method="get" class="m-0">

            <input type="hidden" name="username" value="<?= $_SESSION["usuario"] ?>">

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