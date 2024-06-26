<?php
require_once __DIR__ . "/../../services/imports.php";

$response = file_get_contents(__DIR__ . "/../../assets/json/cards.json");
$data = json_decode($response, true);
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <title>Pokefull - Cartas</title>
    <?php render_component("global/head"); ?>
</head>

<body>
<?php
render_component("global/loader");
render_component("global/header");
?>
<main>
    <?php render_component("card_collection/card_searcher", ["cards" => $data["data"]]); ?>
    <?php render_component("card_collection/all_cards", [
        "cards" => $data["data"],
    ]); ?>
</main>
</body>

</html>