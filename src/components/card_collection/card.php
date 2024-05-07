<?php

$api = "https://api.pokemontcg.io/v2/cards?q=name:vaporeon%20number:30%20hp:320";

$response = file_get_contents($api);

$cards = json_decode($response, true);

echo $cards['data'][0]['id'];
echo $cards['data'][0]['name'];
