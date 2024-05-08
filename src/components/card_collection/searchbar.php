<?php

$api_url = "https://api.pokemontcg.io/v2/cards?q=id:g1*&select=name";

$response = file_get_contents($api_url);

$results = json_decode($response, true);

$cards = $results["data"];
?>

<datalist id="cardList">
    <?php foreach ($cards as $card): ?>
        <option value="<?= $card["name"] ?>"></option>
    <?php endforeach; ?>
</datalist>


<section class="flex justify-center w-max mx-auto p-4">
    <form method="get" class="m-0">
        <label for="name"> Buscar Carta:
            <input type="text" name="name" id="name" list="cardList" autocomplete="on"
                class="input input-bordered text-black bg-neutral-200 dark:bg-black dark:text-neutral-100">
        </label>
        
        <label for="hp"> Buscar por Vida:
                <input type="number" name="hp" id="hp" autocomplete="off"
                class="input input-bordered text-black bg-neutral-200 dark:bg-black dark:text-neutral-100">
        </label>

        <label for="number"> Buscar por Número:
                <input type="number" name="number" id="number" autocomplete="off"
                class="input input-bordered text-black bg-neutral-200 dark:bg-black dark:text-neutral-100">
        </label>
        <button type="submit" class="btn btn-ghost btn-outline btn-error dark:btn-secondary">Buscar</button>
    </form>
</section>