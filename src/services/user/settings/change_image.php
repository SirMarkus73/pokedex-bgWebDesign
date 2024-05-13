<?php
session_start();
require_once __DIR__ . "/../../protected_page.php";
include_once __DIR__ . "/../../methods.php";

$username = post("username", null);
$pokemon_name = post("name", null);

if (isset($username)) {
    $api_url = "https://pokeapi.co/api/v2/pokemon/$pokemon_name";

    $result = file_get_contents($api_url);

    $pokemon = json_decode($result, true);

    if (isset($_SESSION["image"])) {
        $_SESSION["image"] = $pokemon["sprites"]["front_default"];

        header("Location: " . SRC_ROUTE . "/pages/index.php");
        exit();
    }
}

header(
    "Location: " .
    SRC_ROUTE .
    "/pages/error.php?title=Cambio de imagen fallido&message=El cambio de imagen a fallado, 
                cierre sesión y vuelva a abrirla, después inténtelo de nuevo &href=" .
    SRC_ROUTE .
    "/pages/user/settings.php"
);

exit();
