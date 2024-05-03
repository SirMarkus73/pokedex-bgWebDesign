<?php

require_once(__DIR__ . "/../../services/methods.php");

$limit = get("limit", 8);
$offset = get("offset", 0);

function show_pokemon_card($name, $image_url, $ability, $stats, $types)
{ ?>

    <article class="card w-96 shadow-xl bg-red-600 dark:bg-fuchsia-600">
        <figure><img src="<?= $image_url ?>" alt="pokemon <?= $name ?>" /></figure>
        <div class="card-body">
            <h2 class="card-title">
                <?= $name ?>
                <div class="badge badge-secondary"><?= $ability ?></div>
            </h2>
            <div class="stats">
                <?php foreach ($stats as $stat) { ?>
                    <div class="stat h-fit">
                        <div class="stat-title"><?= $stat['stat']['name'] ?></div>
                        <div class="stat-value"><?= $stat['base_stat'] ?></div>
                    </div>
                <?php }; ?>

            </div>
            <div class="card-actions justify-end">
                <?php foreach ($types as $type) { ?>
                    <div class="badge badge-outline"><?= $type['type']['name'] ?></div>
                <?php }; ?>
            </div>
        </div>
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
        $pokemon_ability = $pokemon["abilities"][0]["ability"]["name"];
        $stats = $pokemon["stats"];
        $types = $pokemon["types"];

        show_pokemon_card($pokemon_name, $pokemon_image, $pokemon_ability, $stats, $types);
    }
}
?>
<section class="gap-3 mx-auto my-10 grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 justify-center items-center">
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