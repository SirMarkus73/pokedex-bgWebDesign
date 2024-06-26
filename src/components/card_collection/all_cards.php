<?php

require_once __DIR__ . "/../../services/methods.php";
require_once __DIR__ . "/../../services/components_renderer.php";

$response = file_get_contents(__DIR__ . "/../../assets/json/cards.json");
$data = json_decode($response, true);
$cards = $data["data"];

$offset = get("offset", 10);
$length = get("length", 10);

if ($offset < 0) {
    $offset = 0;
}

if ($length < 1) {
    $length = 1;
}

if ($offset > count($cards) - $length) {
    $offset = count($cards) - $length;
}

if ($length > 20) {
    $length = 20;
}

$cards = array_slice(
    $cards,
    $offset,
    $length

);

?>
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    <?php
    foreach ($cards as $card) :
        render_component("card_collection/card", ["id" => $card["id"], "cards" => $cards]);
    endforeach; ?>
</section>

<section class="flex justify-center mx-auto ">
    <form method="get">
        <button name="offset" value="<?= $offset - $length ?>" class="btn btn-outline dark:bg-purple-600 bg-red-600">
            Anterior
        </button>
        <label>
            <input type="number" name="length" max="20" min="1" value="<?= $length ?>"
                   class="input input-bordered text-black">
        </label>
        <button name="offset" value="<?= $offset + $length ?>" class="btn btn-outline dark:bg-purple-600 bg-red-600">
            Siguiente
        </button>
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