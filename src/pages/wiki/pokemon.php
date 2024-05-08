<?php
require_once(__DIR__ . "/../../services/imports.php");
require_once(__DIR__ . "/../../services/methods.php");

$pokemon_name = strtolower(get("name", ""));
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php render_component("global/head", ["title" => "Pokefull - Pokemon $pokemon_name"]) ?>
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