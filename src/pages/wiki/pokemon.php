<?php
require_once __DIR__ . "/../../services/imports.php";
require_once __DIR__ . "/../../services/methods.php";
require_once __DIR__ . "/../../services/pokemons/get_pokemons.php";

/* @var $pokemons array */

$pokemon_name = strtolower(get("name", ""));

foreach ($pokemons as $i) {
    if ($pokemon_name == $i["name"]) {
        $pokemon = $i;
        break;
    } else {
        $pokemon = null;
    }
}

if (isset($pokemon)) :

    $pokemon_name = $pokemon["name"];
    $pokemon_image = $pokemon["image"];
    $abilities = $pokemon["abilities"];
    $stats = $pokemon["stats"];
    $types = $pokemon["types"];

    ?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <title>Pokefull - Pokemon <?= $pokemon_name ?></title>
        <?php render_component("global/head") ?>
    </head>

    <body>
    <?php
    render_component("global/loader");
    render_component("global/header");
    ?>
    <main class="flex flex-col justify-center items-center h-3/4">

        <form action="pokemon.php" method="get" class="m-0">
            <?php render_component("pokemon/searchbar", [
                "action" => "pokemon.php",
                "label" => "Buscar pokemon",
                "pokemons" => $pokemons,
            ]); ?>
        </form>

        <?php render_component(
            "pokemon/card",
            [
                "name" => $pokemon_name,
                "image" => $pokemon_image,
                "abilities" => $abilities,
                "stats" => $stats,
                "types" => $types,
                "width" => "w-[80dvw]",
                "height" => "h-[20dvh]",
            ]
        ) ?>
    </main>
    </body>

    </html>
<?php
else :
    header(
        "Location:" . SRC_ROUTE . "/pages/error.php?title=Pokemon no encontrado&message=El pokemon solicitado no existe&href=" . SRC_ROUTE . "/pages/wiki/"
    ); ?>

    <script>
        window.location.href = '../pages/error.php?title=Pokemon no encontrado&message=El pokemon solicitado no existe&href=<?= SRC_ROUTE ?>/pages/wiki/';
    </script>

    <?php exit();
endif;
