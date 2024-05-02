<?php

function show_pokemon_card(string $name, string $image_url)
{ ?>
    <article>
        <img src="<?= $image_url ?>" alt="pokemon <?= $name ?>">
        <p> <?= $name ?></p>
    </article>
<?php }; ?>

<?php

function show_pokemons(int $limit, int $offset)
{
    $api_url = "https://pokeapi.co/api/v2/pokemon?limit=$limit&offset=$offset";
    $result = file_get_contents($api_url);
    $response = json_decode($result, true);

    foreach ($response['results'] as $pokemons) {

        $pokemon_url = file_get_contents($pokemons['url']);
        $pokemon = json_decode($pokemon_url, true);

        $pokemon_name = $pokemon['name'];

        $pokemon_image = $pokemon['sprites']['front_default'];

        show_pokemon_card($pokemon_name, $pokemon_image);
    }
}


?>