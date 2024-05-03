<?php

require_once(__DIR__ . "/../../services/methods.php");

$limit = get("limit", 8);
$offset = get("offset", 0);

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
<section class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 justify-center w-max mx-auto gap-20 items-center">
    <?php show_pokemons($limit, $offset) ?>
</section>

<section class="flex justify-center mx-auto">
    <form method="get">
        <button name="offset" value="<?= $offset - $limit ?>" class="btn btn-outline">Anterior</button>
        <input type="number" name="limit" id="limit" max="20" min="1" value="<?= $limit ?>" id="limit">
        <button name="offset" value="<?= $offset + $limit ?>" class="btn btn-outline">Siguiente</button></button>
        <button type="submit" class="hidden" id="submit"></button>
    </form>
</section>
<script>
    document.getElementById("limit").addEventListener("change", () => {
        document.getElementById("limit").addEventListener("focusout", () => {
            document.getElementById("submit").click();
        })
    })
</script>