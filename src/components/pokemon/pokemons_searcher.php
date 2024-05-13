<?php

require_once __DIR__ . "/../../services/methods.php";
require_once __DIR__ . "/../../services/components_renderer.php";

$limit = get("limit", 8);
$get_type = get("type", null);

if (isset($get_type) && $get_type != "") {

    $filtered_pokemons = [];
    foreach ($pokemons as $pokemon) {
        foreach ($pokemon["types"] as $type) {
            if ($type == $get_type) {

                array_push($filtered_pokemons, $pokemon);
            }
        }
    }

    $pokemons = $filtered_pokemons;
}

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

<section
        class="gap-10 mx-auto my-10 grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 place-items-center w-max">
    <?php show_pokemons($limit, $offset, $pokemons); ?>
</section>

<section>
    <form method="get" class="flex justify-center mx-auto flex-col gap-3">
        <div class="flex flex-row justify-center">
            <button name="offset" value="<?= $offset -
            $limit ?>" class="btn btn-outline dark:bg-purple-600 bg-red-600">Anterior
            </button>
            <input type="number" name="limit" id="limit" max="<?= $max_limit ?>" min="1" value="<?= $limit ?>"
                   id="limit" class="input input-bordered text-black">
            <button name="offset" value="<?= $offset +
            $limit ?>" class="btn btn-outline dark:bg-purple-600 bg-red-600">Siguiente
            </button>

            <input type="hidden" name="type" value="<?= $get_type ? $get_type : null ?>">
            <button type="submit" class="hidden" id="submit"></button>
        </div>
        <div class="grid grid-cols-6 w-2/3 justify-center mx-auto gap-3 mb-5 m-0">
            <button class="btn btn-outline dark:bg-purple-600 bg-red-600" name="type" value="bug">
                <img src="<?= SRC_ROUTE ?>/assets/img/types/bug.png" alt="bug type">
                Bug
            </button>
            <button class="btn btn-outline dark:bg-purple-600 bg-red-600" name="type" value="dark">
                <img src="<?= SRC_ROUTE ?>/assets/img/types/dark.png" alt="dark type">
                Dark
            </button>
            <button class="btn btn-outline dark:bg-purple-600 bg-red-600" name="type" value="dragon">
                <img src="<?= SRC_ROUTE ?>/assets/img/types/dragon.png" alt="dragon type">
                Dragon
            </button>
            <button class="btn btn-outline dark:bg-purple-600 bg-red-600" name="type" value="electric">
                <img src="<?= SRC_ROUTE ?>/assets/img/types/electric.png" alt="electric type">
                Electric
            </button>
            <button class="btn btn-outline dark:bg-purple-600 bg-red-600" name="type" value="fairy">
                <img src="<?= SRC_ROUTE ?>/assets/img/types/fairy.png" alt="fairy type">
                Fairy
            </button>
            <button class="btn btn-outline dark:bg-purple-600 bg-red-600" name="type" value="fighting">
                <img src="<?= SRC_ROUTE ?>/assets/img/types/fighting.png" alt="fighting type">
                Fighting
            </button>
            <button class="btn btn-outline dark:bg-purple-600 bg-red-600" name="type" value="fire">
                <img src="<?= SRC_ROUTE ?>/assets/img/types/fire.png" alt="fire type">
                Fire
            </button>
            <button class="btn btn-outline dark:bg-purple-600 bg-red-600" name="type" value="flying">
                <img src="<?= SRC_ROUTE ?>/assets/img/types/flying.png" alt="flying type">
                Flying
            </button>
            <button class="btn btn-outline dark:bg-purple-600 bg-red-600" name="type" value="ghost">
                <img src="<?= SRC_ROUTE ?>/assets/img/types/ghost.png" alt="ghost type">
                Ghost
            </button>
            <button class="btn btn-outline dark:bg-purple-600 bg-red-600" name="type" value="grass">
                <img src="<?= SRC_ROUTE ?>/assets/img/types/grass.png" alt="grass type">
                Grass
            </button>
            <button class="btn btn-outline dark:bg-purple-600 bg-red-600" name="type" value="ground">
                <img src="<?= SRC_ROUTE ?>/assets/img/types/ground.png" alt="ground type">
                Ground
            </button>
            <button class="btn btn-outline dark:bg-purple-600 bg-red-600" name="type" value="ice">
                <img src="<?= SRC_ROUTE ?>/assets/img/types/ice.png" alt="ice type">
                Ice
            </button>
            <button class="btn btn-outline dark:bg-purple-600 bg-red-600" name="type" value="normal">
                <img src="<?= SRC_ROUTE ?>/assets/img/types/normal.png" alt="normal type">
                Normal
            </button>
            <button class="btn btn-outline dark:bg-purple-600 bg-red-600" name="type" value="poison">
                <img src="<?= SRC_ROUTE ?>/assets/img/types/poison.png" alt="poison type">
                Poison
            </button>
            <button class="btn btn-outline dark:bg-purple-600 bg-red-600" name="type" value="psychic">
                <img src="<?= SRC_ROUTE ?>/assets/img/types/psychic.png" alt="psychic type">
                Psychic
            </button>
            <button class="btn btn-outline dark:bg-purple-600 bg-red-600" name="type" value="rock">
                <img src="<?= SRC_ROUTE ?>/assets/img/types/rock.png" alt="rock type">
                Rock
            </button>
            <button class="btn btn-outline dark:bg-purple-600 bg-red-600" name="type" value="steel">
                <img src="<?= SRC_ROUTE ?>/assets/img/types/steel.png" alt="steel type">
                Steel
            </button>
            <button class="btn btn-outline dark:bg-purple-600 bg-red-600" name="type" value="water">
                <img src="<?= SRC_ROUTE ?>/assets/img/types/water.png" alt="water type">
                Water
            </button>
        </div>
    </form>
</section>
<script>
    document.getElementById("limit").addEventListener("change", () => {
        document.getElementById("limit").addEventListener("focusout", () => {
            document.getElementById("submit").click();
        })
    })
</script>