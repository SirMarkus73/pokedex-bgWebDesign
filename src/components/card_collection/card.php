<?php
// cards.php
require __DIR__ . "/../../services/methods.php";

// Obtén el ID de la carta desde la URL
$cardId = get("id", "xy2-5");

// Realiza una solicitud a la API de Pokémon
$apiUrl = "https://api.pokemontcg.io/v2/cards?q=id:$cardId";

$response = file_get_contents($apiUrl);

$data = json_decode($response, true);

// Extrae los datos relevantes
$cardName = $data["data"][0]["name"];
$cardHp = $data["data"][0]["hp"];
$cardId = $data["data"][0]["id"];

echo "Card Name: $cardName";
echo "Card Hp: $cardHp";
echo "Card Id: $cardId";
