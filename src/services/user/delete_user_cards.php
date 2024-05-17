<?php
require_once __DIR__ . "/../methods.php";
require_once __DIR__ . "/../src_route.php";
require_once __DIR__ . "/../env.php";
require_once __DIR__ . "/../sql/methods.php";
require_once __DIR__ . "/../cookies/methods.php";

$password = get("password", null);
$admin_password = $_ENV["ADMIN_PASSWORD"];

if ($password === $admin_password) {

    $truncated = truncate_table_from("user_cards");

    if ($truncated) {
        kill_cookies();
        die("200");
    }

    header(
        "Location:" . SRC_ROUTE . "/pages/error.php?title=Error al borrar las cartas, contacte con el programador de turno&href=user/settings.php"
    );

    exit();


}

header("Location:" . SRC_ROUTE . "/pages/index.php");
exit();


