<?php

require_once __DIR__ . "/../../services/methods.php";
// URL de la API
$url = "https://api.pokemontcg.io/v2/cards";

// Parámetros de búsqueda (puedes ajustar estos valores según tus necesidades)
$parametros = [
    "name" => "Pikachu", // Nombre de la carta
    "set" => "base1", // Set de la carta
];

// Realiza la solicitud GET a la API
$response = file_get_contents($url . "?" . http_build_query($parametros));

// Decodifica la respuesta JSON
$data = json_decode($response, true);

// Verifica si se obtuvieron resultados
if (isset($data["data"]) && !empty($data["data"])) {
    foreach ($data["data"] as $carta) {
        echo "Nombre: " . $carta["name"] . "<br>";
        echo "Set: " . $carta["set"]["name"] . "<br>";
        echo "Tipo: " . $carta["types"][0] . "<br>";
        echo "Rareza: " . $carta["rarity"] . "<br>";
        echo "<hr>";
    }
} else {
    echo "No se encontraron cartas Pokémon con los parámetros especificados.";
}
