<?php

require_once __DIR__ . "/../../services/methods.php";

$limit = get("limit", 8);

$max_limit = 20;

if ($limit > $max_limit) {
    $limit = $max_limit;
}

if ($limit < 1) {
    $limit = 1;
}

$offset = get("offset", 0);

if ($offset < 0) {
    $offset = 0;
}

function show_pokemon_card($name, $image_url, $ability, $stats, $types)
{
?>

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
                        <div class="stat-title"><?= $stat["stat"]["name"] ?></div>
                        <div class="stat-value"><?= $stat["base_stat"] ?></div>
                    </div>
                <?php } ?>

            </div>
            <div class="card-actions justify-end text-black">
                <?php foreach ($types as $type) { ?>
                    <?php
                    $type_name = $type["type"]["name"];
                    $type_color = "bg-$type_name";

                    /* Colors 
                    bg-steel: "#404040",
                    bg-water: "#3b82f6",
                    bg-bug: "#84cc16",
                    bg-dragon: "#6366f1",
                    bg-electric: "#eab308",
                    bg-ghost: "#8b5cf6",
                    bg-fire: "#f97316",
                    bg-fairy: "#ec4899",
                    bg-ice: "#06b6d4",
                    bg-fighting: "#dc2626",
                    bg-normal: "#737373",
                    bg-grass: "#22c55e",
                    bg-psychic: "#db2777",
                    bg-rock: "#a16207",
                    bg-dark: "#64748b",
                    bg-ground: "#f59e0b",
                    bg-poison: "#d946ef",
                    bg-flying: "#a855f7", */
                    ?>

                    <div class="badge text-white <?= $type_color ?>"><?= $type_name ?></div>
                <?php } ?>
            </div>
        </div>
    </article>
<?php
}
?>

<?php function show_pokemons(int $limit, int $offset, array $pokemons)
{
    $pokemons = array_slice(
        $pokemons,
        $offset,
        $limit

    );

    foreach ($pokemons as $pokemon) :

        $pokemon_name = $pokemon["name"];
        $pokemon_image = $pokemon["image"];
        $pokemon_ability = $pokemon["abilities"][0]["ability"]["name"];
        $stats = $pokemon["stats"];
        $types = $pokemon["types"];
?>
        <a href="pokemon.php?name=<?= $pokemon_name ?>"><?php show_pokemon_card(
                                                            $pokemon_name,
                                                            $pokemon_image,
                                                            $pokemon_ability,
                                                            $stats,
                                                            $types
                                                        ); ?></a>
<?php
    endforeach;
} ?>
<section class="gap-2 mx-auto my-10 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 place-items-center">
    <?php show_pokemons($limit, $offset, $pokemons); ?>
</section>

<section class="flex justify-center mx-auto">
    <form method="get">
        <button name="offset" value="<?= $offset -
                                            $limit ?>" class="btn btn-outline dark:bg-purple-600 bg-red-600">Anterior</button>
        <input type="number" name="limit" id="limit" max="<?= $max_limit ?>" min="1" value="<?= $limit ?>" id="limit" class="input input-bordered text-black">
        <button name="offset" value="<?= $offset +
                                            $limit ?>" class="btn btn-outline dark:bg-purple-600 bg-red-600">Siguiente</button>
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