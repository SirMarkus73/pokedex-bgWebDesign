<?php
// cards.php
require __DIR__ . "/../../services/methods.php";

// Obtén el ID de la carta desde la URL
$cardName = get("name", " ");
$cardHp = get("hp", " ");
$cardNumber = get("number", " ");

// Realiza una solicitud a la API de Pokémon
$apiUrl = str_replace(
    " ",
    "&",
    "https://api.pokemontcg.io/v2/cards?q=name:$cardName%20hp:$cardHp%20number:$cardNumber"
);

$response = file_get_contents($apiUrl);

$data = json_decode($response, true);

// Extrae los datos relevantes
$img = $data["data"][0]["images"]["large"];
?>

<img class="w-1/4 flex justify-center mx-auto"  src="<?= $img ?>" alt="a ">