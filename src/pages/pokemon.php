<?php require_once("../services/imports/php.php") ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon</title>
    <?php require_once("../services/imports/html.php") ?>
</head>

<body class="dark:bg-neutral-800 dark:text-white">
    <?php require("../components/header.php") ?>
    <?php
    // Obtener el nombre del Pokémon desde la URL
    $pokemon_name = $_GET['name'];

    // Simular una base de datos de información de Pokémon (solo para ejemplo)
    $pokemon_info = array(
        "Pikachu" => array(
            "Tipo" => "Eléctrico",
            "Descripción" => "Pikachu es un Pokémon de tipo eléctrico muy conocido por su aparición en la serie animada de Pokémon."
        ),
        "Charmander" => array(
            "Tipo" => "Fuego",
            "Descripción" => "Charmander es un Pokémon de tipo fuego. Evoluciona a Charmeleon y luego a Charizard."
        ),
        "Bulbasaur" => array(
            "Tipo" => "Planta",
            "Descripción" => "Bulbasaur es un Pokémon de tipo planta. Es uno de los tres Pokémon iniciales en Pokémon Rojo y Azul."
        ),
        "Squirtle" => array(
            "Tipo" => "Agua",
            "Descripción" => "Squirtle es un Pokémon de tipo agua. Es uno de los tres Pokémon iniciales en Pokémon Rojo y Azul."
        )
    );

    // Verificar si el Pokémon existe en la base de datos simulada
    if (array_key_exists($pokemon_name, $pokemon_info)) {
        echo "<h1>$pokemon_name</h1>";
        echo "<p><strong>Tipo:</strong> " . $pokemon_info[$pokemon_name]['Tipo'] . "</p>";
        echo "<p><strong>Descripción:</strong> " . $pokemon_info[$pokemon_name]['Descripción'] . "</p>";
    } else {
        echo "<h1>Pokémon no encontrado</h1>";
    }
    ?>
</body>

</html>