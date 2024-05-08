<?php
// cards.php
require __DIR__ . "/../../services/methods.php";

// Obtén el ID de la carta desde la URL
$cardName = str_replace(" ", "*", get("name", null));
$cardNumber = get("number", null);
$cardHP = get("hp", "");

if ($cardHP != "") {
    $hpParam = "%20hp:$cardHP";
} else {
    $hpParam = "";
}

if (isset($cardName) && isset($cardNumber)):
    // Realiza una solicitud a la API de Pokémon

    $api_url = "https://api.pokemontcg.io/v2/cards?q=name:*$cardName*%20number:$cardNumber$hpParam&pageSize=1&select=images,name";

    $response = file_get_contents($api_url);

    $data = json_decode($response, true);

    if (!empty($data["data"])) {
        // Extrae los datos relevantes
        $img = $data["data"][0]["images"]["large"];
        $name = $data["data"][0]["name"];
    }
endif;
?>

<?php if (!empty($data["data"])): ?>
<a href="<?= $img ?>" target="_blank">
    <img class="w-1/4 flex justify-center mx-auto"  src="<?= $img ?>" alt="Pokemon <?= $name ?> ">
</a>

<?php endif; ?>
