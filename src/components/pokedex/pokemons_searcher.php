<?php

require_once(__DIR__ . "/../../services/methods.php");

$limit = get("limit", 8);
$offset = get("offset", 0);

function show_pokemon_card($name, $image_url, $ability, $stats, $types)
{ ?>

    <article class="card w-96 shadow-xl bg-red-600 dark:bg-fuchsia-600 text-white">
        <figure><img src="<?= $image_url ?>" alt="pokemon <?= $name ?>" /></figure>
        <div class="card-body">
            <h2 class="card-title">
                <?= $name ?>
                <div class="badge bg-white dark:bg-fuchsia-500 text-black dark:text-white "><?= $ability ?></div>
            </h2>
            <div class="stats bg-red-500 dark:bg-fuchsia-500 text-white">
                <?php foreach ($stats as $stat) { ?>
                    <div class="stat h-fit  bg-red-500 dark:bg-fuchsia-500 text-white">
                        <div class="stat-title"><?= $stat['stat']['name'] ?></div>
                        <div class="stat-value"><?= $stat['base_stat'] ?></div>
                    </div>
                <?php }; ?>

            </div>
            <div class="card-actions justify-end text-black">
                <?php foreach ($types as $type) { ?>
                    <?php
                    $type_name = $type['type']['name'];
                    $type_color = "bg-red-500";
                    switch ($type_name) {
                        case "steel":
                            $type_color = "bg-neutral-700";
                            break;
                        case "fire":
                            $type_color = "bg-orange-500";
                            break;
                        case "water":
                            $type_color = "bg-blue-500";
                            break;
                        case "grass":
                            $type_color = "bg-green-500";
                            break;
                        case "electric":
                            $type_color = "bg-yellow-500";
                            break;
                        case "ice":
                            $type_color = "bg-cyan-500";
                            break;
                        case "fighting":
                            $type_color = "bg-red-600";
                            break;
                        case "fairy":
                            $type_color = "bg-pink-500";
                            break;
                        case "psychic":
                            $type_color = "bg-pink-600";
                            break;
                        case "rock":
                            $type_color = "bg-yellow-700";
                            break;
                        case "ground":
                            $type_color = "bg-amber-500";
                            break;
                        case "bug":
                            $type_color = "bg-lime-500";
                            break;
                        case "ghost":
                            $type_color = "bg-violet-500";
                            break;
                        case "normal":
                            $type_color = "bg-neutral-500";
                            break;
                        case "poison":
                            $type_color = "bg-fuchsia-500";
                            break;
                        case "dragon":
                            $type_color = "bg-indigo-500";
                            break;
                        case "flying":
                            $type_color = "bg-purple-500";
                            break;
                        case "dark":
                            $type_color = "bg-slate-500";
                            break;
                    }
                    ?>

                    <div class="badge <?= $type_color ?>"><?= $type_name ?></div>
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
<section class="gap-2 mx-auto my-10 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 place-items-center">
    <?php show_pokemons($limit, $offset) ?>
</section>

<section class="flex justify-center mx-auto">
    <form method="get">
        <button name="offset" value="<?= $offset - $limit ?>" class="btn btn-outline dark:bg-purple-600 bg-red-600">Anterior</button>
        <input type="number" name="limit" id="limit" max="20" min="1" value="<?= $limit ?>" id="limit" class="input input-bordered text-black">
        <button name="offset" value="<?= $offset + $limit ?>" class="btn btn-outline dark:bg-purple-600 bg-red-600">Siguiente</button>
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