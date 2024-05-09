<?php

$api_url = "https://pokeapi.co/api/v2/pokemon?limit=100000&offset=0";

$response = file_get_contents($api_url);

$results = json_decode($response, true);

$pokemons = $results["results"];
?>

<datalist id="pokemons">
    <?php foreach ($pokemons as $pokemon) : ?>
        <option value="<?= $pokemon["name"] ?>"></option>
    <?php endforeach; ?>
</datalist>


<section class="flex justify-center w-max mx-auto p-4">

    <label for="name"> <?= $label ?>:
        <input type="text" name="name" id="name" list="pokemons" autocomplete="pokemons" class="input input-bordered text-black bg-neutral-200 dark:bg-black dark:text-neutral-100">
    </label>
    <button type="submit" class="btn btn-ghost btn-outline btn-error dark:btn-secondary">Buscar</button>

</section>