<?php
include_once __DIR__ . "/../../src_route.php";
include_once __DIR__ . "/../methods.php";

$page = get("page", 1);

$local_json_route = __DIR__ . "/../../assets/json/cards.json";

$API_URL = "https://api.pokemontcg.io/v2/cards?page=$page&pageSize=250&select=name,number,hp,images,id";
$cards = file_get_contents($API_URL);
$cards_decoded = json_decode($cards, true);

if (!empty($cards_decoded["data"])) {
    $cards = $cards_decoded["data"];

    $content = [];

    foreach ($cards as $card) {
        if (isset($card["hp"])) {
            array_push($content, [
                "id" => $card["id"],
                "name" => $card["name"],
                "number" => $card["number"],
                "hp" => $card["hp"],
                "img" => $card["images"]["large"],
            ]);
        } else {
            array_push($content, [
                "id" => $card["id"],
                "name" => $card["name"],
                "number" => $card["number"],
                "hp" => null,
                "img" => $card["images"]["large"],
            ]);
        }
    }

    $local_json = file_get_contents($local_json_route);
    $decoded_local_json = json_decode($local_json, true);

    if (!empty($decoded_local_json)) {
        $full_content = [
            "data" => array_merge($decoded_local_json["data"], $content),
            "page" => $page,
        ];
    } else {
        $full_content = ["data" => $content, "page" => $page];
    }

    $encoded = json_encode($full_content);

    if ($decoded_local_json["page"] < $page) {
        file_put_contents($local_json_route, $encoded, JSON_PRETTY_PRINT);
        $page += 1;
        header("Location: ./get_json.php?page=$page");
    } else {
        die("Esta pagina ya se ha consultado");
    }
} else {
    die("Has llegado al final de la pagina");
}

exit();
