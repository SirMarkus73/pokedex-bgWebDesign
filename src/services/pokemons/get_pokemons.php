<?php

$API_URL = __DIR__ . "/../../assets/json/pokemons.json";

$response = file_get_contents($API_URL);
$pokemons = json_decode($response, true);
$pokemons = $pokemons["data"];
