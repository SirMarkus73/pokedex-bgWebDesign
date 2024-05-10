<?php

require_once __DIR__ . "/../../services/methods.php";
require_once __DIR__ . "/../../services/components_renderer.php";

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


function show_pokemons(int $limit, int $offset, array $pokemons)
{
    $pokemons = array_slice(
        $pokemons,
        $offset,
        $limit

    );

    foreach ($pokemons as $pokemon) :

        $pokemon_name = $pokemon["name"];
        $pokemon_image = $pokemon["image"];
        $pokemon_ability = $pokemon["abilities"][0];
        $stats = $pokemon["stats"];
        $types = $pokemon["types"];
?>

        <a href="pokemon.php?name=<?= $pokemon_name ?>" class="flex justify-center">

            <?php
            render_component(
                "pokemon/card",
                [
                    "name" => $pokemon_name,
                    "image" => $pokemon_image,
                    "abilities" => $pokemon_ability,
                    "stats" => $stats,
                    "types" => $types,
                    "width" => "w-[20dvw]",
                    "height" => "h-[10dvh]",
                ]
            )
            ?>
        </a>
<?php
    endforeach;
} ?>

<section class="gap-10 mx-auto my-10 grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 place-items-center w-max">
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