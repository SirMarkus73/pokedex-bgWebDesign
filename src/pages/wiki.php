<?php require_once(__DIR__ . "/../services/imports.php") ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiki Pokefull</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php require(__DIR__ . "/../components/header.php") ?>
    <h1 class="title">Wiki de pokemon</h1>
    <p class="text"> Bienvenidos a nuestra PokeWiki, donde podras encontrar la informacion de tus pokemones favoritos y saber informacion sobre que es pokemon . Esperamos con ansias que os guste </p>
    <?php
    // Array con los nombres de algunos Pokémon (solo para ejemplo)
    $pokemons = array("Pikachu", "Charmander", "Bulbasaur", "Squirtle");

    // Recorrer el array e imprimir enlaces a las páginas de cada Pokémon
    foreach ($pokemons as $pokemon) {
        echo "<li><a href='pokemon.php?name=" . urlencode($pokemon) . "'>$pokemon</a></li>";
    }
    ?>
    </ul>


</body>

</html>