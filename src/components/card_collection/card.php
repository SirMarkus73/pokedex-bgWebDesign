<?php
// cards.php
require __DIR__ . "/../../services/methods.php";

// Obtén el ID de la carta desde la URL
$cardName = get("name", null);
$cardNumber = get("number", null);
$cardHP = get("hp", null);

if (isset($cardHP)) {
    $hpParam = "%20hp=$cardHP";
} else {
    $hpParam = "";
}

if (isset($cardName) && isset($cardNumber)):
    // Realiza una solicitud a la API de Pokémon
    $apiUrl = str_replace(
        " ",
        "*",
        "https://api.pokemontcg.io/v2/cards?q=name:$cardName%20number:$cardNumber$hpParam&select=name,hp,number,images"
    );

    $response = file_get_contents($apiUrl);

    $data = json_decode($response, true);

    if (isset($data)) {
        // Extrae los datos relevantes
        $img = $data["data"][0]["images"]["large"];
    }
endif;
?>

<?php if (isset($data)): ?>

<img class="w-1/4 flex justify-center mx-auto"  src="<?= $img ?>" alt="a ">

<?php endif; ?>
