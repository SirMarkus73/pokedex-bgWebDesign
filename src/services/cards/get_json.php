<?php
include_once __DIR__ . "/../../services/src_route.php";
include_once __DIR__ . "/../methods.php";

$page = get("page", 1);


function get_pages(int $step, int $max): array
{

    $pages = [];

    for ($i = 1; $i <= $max; $i += $step) {
        $pages[] = $i;
    }

    return $pages;
}

$local_json_route = __DIR__ . "/../../assets/json/cards.json";

while (true) {

    $API_URL = "https://api.pokemontcg.io/v2/cards?page=$page&pageSize=250&select=name,number,hp,images,id";
    $cards = file_get_contents($API_URL);
    $cards_decoded = json_decode($cards, true);

    $max_pages = $cards_decoded["totalCount"] / 250 + 1;

    if (!empty($cards_decoded["data"])) {
        $cards = $cards_decoded["data"];

        $content = [];

        foreach ($cards as $card) {
            if (isset($card["hp"])) {
                $content[] = [
                    "id" => $card["id"],
                    "name" => $card["name"],
                    "number" => $card["number"],
                    "hp" => $card["hp"],
                    "img" => $card["images"]["large"],
                ];
            } else {
                $content[] = [
                    "id" => $card["id"],
                    "name" => $card["name"],
                    "number" => $card["number"],
                    "hp" => null,
                    "img" => $card["images"]["large"],
                ];
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
            file_put_contents($local_json_route, $encoded);
            if (in_array($page, get_pages(3, $max_pages))) {
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
