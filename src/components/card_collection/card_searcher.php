<?php

require_once __DIR__ . "/../../services/methods.php";

$offset = get("offset", 10);

if ($offset < 10) {
    $offset = 10;
}
?>


<?php function show_pokemons(int $limit, int $offset)
{
    $api_url = "https://pokeapi.co/api/v2/cards?limit=$limit&offset=$offset";
    $result = file_get_contents($api_url);
    $response = json_decode($result, true);

    foreach ($response["results"] as $cards):

        $cards_url = file_get_contents($cards["url"]);
        $cards = json_decode($cards_url, true);
        $img = $cards["images"]["large"];
        ?>
        <a href="cards.php?name=<?= $cards ?>">
</a>
<?php
    endforeach;
} ?>
