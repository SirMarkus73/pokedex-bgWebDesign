<?php

$json_route = __DIR__ . "/../../assets/json/cards.json";

$response = file_get_contents($json_route);

$cards = json_decode($response, true);

if ($id != null):
    foreach ($cards["data"] as $card) {
        if ($card["id"] == $id) {
            $card_selected = $card;
        }
    } ?>

<section class=" m-5 mb-0 w-full mx-auto">
    <a href="<?= $card_selected["img"] ?>">
        <img src="<?= $card_selected["img"] ?>" alt="Pokemon <?= $card_selected[
    "name"
] ?>" class="w-1/3 mx-auto border-4 border-red-500 dark:border-fuchsia-500 rounded-3xl ">
    </a>
</section>

<?php
endif; ?>
