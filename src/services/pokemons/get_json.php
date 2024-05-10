<?php
include_once __DIR__ . "/../../src_route.php";
include_once __DIR__ . "/../methods.php";

$page = get("page", 1);

$local_json_route = __DIR__ . "/../../assets/json/pokemons.json";

$API_URL = "https://pokeapi.co/api/v2/pokemon/$page";
$response = file_get_contents($API_URL);
$pokemon = json_decode($response, true);

$pokemon_id = $pokemon["id"];
$pokemon_name = $pokemon["forms"][0]["name"];
$pokemon_abilities = $pokemon["abilities"];
$pokemon_stats = $pokemon["stats"];
$pokemon_image = $pokemon["sprites"]["front_default"];
$pokemon_image_shiny = $pokemon["sprites"]["front_shiny"];
$pokemon_types = $pokemon["types"];


if (isset($pokemon)) {

    while (true) {
        $content = [];

        array_push($content, [
            "id" => $pokemon_id,
            "name" => $pokemon_name,
            "abilities" => $pokemon_abilities,
            "stats" => $pokemon_stats,
            "image" => $pokemon_image,
            "image_shiny" => $pokemon_image_shiny,
            "types" => $pokemon_types,
        ]);


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
            if ($page == 100 || $page == 200 || $page == 300 || $page == 400 || $page == 500 || $page == 600 || $page == 700 || $page == 800 || $page == 900 || $page == 1000 || $page == 1100 || $page == 1200) {
                file_put_contents($local_json_route, $encoded, JSON_PRETTY_PRINT);
                $page += 1;
                header("Location: ./get_json.php?page=$page");
                exit();
            } else {
                $page += 1;
            }
        } else {
            die("Esta pagina ya se ha consultado");
        }
    }
} else {
    die("Has llegado al final de la pagina");
}

exit();
