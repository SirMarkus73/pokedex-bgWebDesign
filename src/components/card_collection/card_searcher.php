<?php

$json_route = __DIR__ . "/../../assets/json/cards.json";

$response = file_get_contents($json_route);

$cards = json_decode($response, true);
?>

<datalist id="cardList">
    <?php foreach ($cards["data"] as $card) : ?>
        <option value="<?= $card["id"] ?>">
            Nombre: <?= $card["name"] ?>,
            Numero: <?= $card["number"] ?>
        </option>
    <?php endforeach; ?>
</datalist>


<section class="border border-red-500 dark:border-fuchsia-500 m-5 mb-0">
    <legend class="text-center text-2xl py-5">Buscar Carta</legend>
    <form method="get" class="flex justify-center w-max mx-auto py-2 gap-4 text-center m-0">

        <label for="name"> ID:
            <input type="text" name="id" id="id" list="cardList" autocomplete="on" required class="input input-bordered text-black bg-neutral-200 dark:bg-black dark:text-neutral-100">
        </label>

        <button type="submit" class="btn btn-ghost btn-outline btn-error dark:btn-secondary">Buscar</button>
    </form>
</section>