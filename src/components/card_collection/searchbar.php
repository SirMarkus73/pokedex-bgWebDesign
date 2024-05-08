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


<section class="border border-red-500 dark:border-fuchsia-500 m-5 mb-0">
    <legend class="text-center text-2xl py-5">Buscar Carta</legend>
    <form method="get" class="flex justify-center w-max mx-auto py-2 gap-4 text-center m-0">
        

        <label for="name"> Nombre:
            <input type="text" name="name" id="name" list="cardList" autocomplete="on" required
                class="input input-bordered text-black bg-neutral-200 dark:bg-black dark:text-neutral-100">
        </label>
        
    
        <label for="number"> Numero:
                <input type="number" name="number" id="number" autocomplete="off" required
                class="input input-bordered text-black bg-neutral-200 dark:bg-black dark:text-neutral-100">
        </label>

        <label for="hp"> Vida (Opcional):
                <input type="number" name="hp" id="hp" autocomplete="off"
                class="input input-bordered text-black bg-neutral-200 dark:bg-black dark:text-neutral-100">
        </label>
        <button type="submit" class="btn btn-ghost btn-outline btn-error dark:btn-secondary">Buscar</button>
    </form>
</section>