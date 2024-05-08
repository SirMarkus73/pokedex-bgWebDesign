<?php
// cards.php
require __DIR__ . "/../../services/methods.php";

// Obtén el ID de la carta desde la URL
$cardName = get("name", null);
$cardHp = get("hp", null);
$cardNumber = get("number", null);

if (isset($cardName) && isset($cardHp) && isset($cardNumber)):
    // Realiza una solicitud a la API de Pokémon
    $apiUrl = str_replace(
        " ",
        "*",
        "https://api.pokemontcg.io/v2/cards?q=name:$cardName%20hp:$cardHp%20number:$cardNumber&select=name,hp,number,images"
    );

    $response = file_get_contents($apiUrl);

    $data = json_decode($response, true);

    // Extrae los datos relevantes
    $img = $data["data"][0]["images"]["large"];
endif;
?>

<?php if (isset($cardName) && isset($cardHp) && isset($cardNumber)): ?>

<img class="w-1/4 flex justify-center mx-auto"  src="<?= $img ?>" alt="a ">

<?php endif; ?>
