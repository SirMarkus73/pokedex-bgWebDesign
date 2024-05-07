<?php

$api_url = "https://api.pokemontcg.io/v2/cards";

$response = file_get_contents($api_url);

$results = json_decode($response, true);

$cardName = $results["results"];

?>

<datalist id="cards">
    <?php foreach ($cardName as $cardName) : ?>
        <option value="<?= $cardName['name'] ?>"></option>
    <?php endforeach ?>
</datalist>


<section class="flex justify-center w-max mx-auto p-4">
    <form action="pokemon.php" method="get" class="m-0">
        <label for="name"> Buscar Carta:
            <input type="text" name="name" id="name" list="cards" autocomplete="cards" class="input input-bordered text-black bg-neutral-200 dark:bg-black dark:text-neutral-100">
        </label>
        <button type="submit" class="btn btn-ghost btn-outline btn-error dark:btn-secondary">Buscar</button>
    </form>
</section>