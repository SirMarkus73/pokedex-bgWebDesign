<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiki Pokefull</title>
    <?php require("../services/imports.php") ?>
</head>

<body class="dark:bg-neutral-800 dark:text-white">
    <?php require("../components/header.php") ?>

    <main class="grid grid-cols-4 justify-center w-max mx-auto gap-20">
        <?php
        const API_URL = "https://pokeapi.co/api/v2/pokemon?limit=8&offset=0";
        $result = file_get_contents(API_URL);
        $response = json_decode($result, true);

        foreach ($response['results'] as $pokemons) : ?>
            <?php
            $pokemon_url = file_get_contents($pokemons['url']);
            $pokemon = json_decode($pokemon_url, true);

            $pokemon_name = $pokemon['name'];

            $pokemon_image = $pokemon['sprites']['front_default'];

            ?>

            <article>

                <img src="<?= $pokemon_image ?>" alt="pokemon <?= $pokemon_name ?>">
                <p> <?= $pokemon_name ?></p>
            </article>
        <?php
        endforeach
        ?>


    </main>
</body>

</html>