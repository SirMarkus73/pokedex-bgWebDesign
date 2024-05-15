<?php
include_once __DIR__ . '/../../services/cards/get_collection.php';
include_once __DIR__ . '/../../services/components_renderer.php';

$user_cards = get_user_cards();

$response = file_get_contents(__DIR__ . "/../../assets/json/cards.json");
$data = json_decode($response, true);
$all_cards = $data["data"];


foreach ($user_cards as $user_card):
    render_component("card_collection/card", ["id" => $user_card, "cards" => $all_cards, "add_button" => false]);
endforeach;


