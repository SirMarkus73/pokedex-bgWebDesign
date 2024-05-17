<?php
include_once __DIR__ . "/../../services/src_route.php";
include_once __DIR__ . "/../methods.php";


$local_json_route = __DIR__ . "/../../assets/json/pokemons.json";

$page = get("page", 1);

$max_pages = file_get_contents("https://pokeapi.co/api/v2/pokemon?limit=100000&offset=0");
$max_pages = json_decode($max_pages, true);
$max_pages = $max_pages["count"] + 1;


function get_pages(int $step, int $max): array
{

    $pages = [];

    for ($i = 1; $i <= $max; $i += $step) {
        $pages[] = $i;
    }

    return $pages;
}

while (true) {

    $API_URL = "https://pokeapi.co/api/v2/pokemon/$page";
    $response = file_get_contents($API_URL);
    $pokemon = json_decode($response, true);

    $pokemon_id = $pokemon["id"];
    $pokemon_name = $pokemon["name"];
    $pokemon_image = $pokemon["sprites"]["front_default"];
    $pokemon_image_shiny = $pokemon["sprites"]["front_shiny"];

    $pokemon_abilities = [];
    foreach ($pokemon["abilities"] as $ability) {
        $pokemon_abilities[] = $ability["ability"]["name"];
    }


    $pokemon_stats = [];
    foreach ($pokemon["stats"] as $stat) {
        $pokemon_stats[] = ["name" => $stat["stat"]["name"], "base" => $stat["base_stat"]];
    }


    $pokemon_types = [];
    foreach ($pokemon["types"] as $type) {
        $pokemon_types[] = $type["type"]["name"];
    }


    if (isset($pokemon)) {


        $content = [];

        $content[] = [
            "id" => $pokemon_id,
            "name" => $pokemon_name,
            "abilities" => $pokemon_abilities,
            "stats" => $pokemon_stats,
            "image" => $pokemon_image,
            "image_shiny" => $pokemon_image_shiny,
            "types" => $pokemon_types,
        ];


        $local_json = file_get_contents($local_json_route);
        $decoded_local_json = json_decode($local_json, true);

        if (empty($decoded_local_json)) {
            $full_content = [
                "data" => $content,
                "page" => ["number" => $page, "url" => $API_URL],
                "creditsTo" => "https://pokeapi.co"
            ];
        } else {
            $full_content = [
                "data" => array_merge($decoded_local_json["data"], $content),
                "page" => ["number" => $page, "url" => $API_URL],
                "creditsTo" => "https://pokeapi.co",
            ];
        }

        $encoded = json_encode($full_content);

        if ($decoded_local_json["page"]["number"] < $page) {
            file_put_contents($local_json_route, $encoded);
            if (in_array($page, get_pages(100, $max_pages))) { // El primer parámetro lo puedes ajustar dependiendo del rendimiento de tu ordenador
                $page += 1;
                header("Location: ./get_json.php?page=$page");
                exit();
            } else {
                $page += 1;
            }
        } else {
            die("Esta pagina ya se ha consultado");
        }
    } else {
        die("Has llegado al final de la pagina");
    }
}
