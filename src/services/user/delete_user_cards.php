<?php
require_once __DIR__ . "/../methods.php";
require_once __DIR__ . "/../src_route.php";
require_once __DIR__ . "/../env.php";
require_once __DIR__ . "/../sql/methods.php";


$password = get("password", null);
$admin_password = $_ENV["ADMIN_PASSWORD"];

if ($password === $admin_password) {
    $db_conn = connect_to_db();
    $truncated = truncate_table_from("user_cards", $db_conn);

    if ($truncated) {
        require_once __DIR__ . "/../cookies/kill_cookies.php";
        die("200");
    }

    header(
        "Location:" . SRC_ROUTE . "/pages/error.php?title=Error al borrar las cartas, contacte con el programador de turno&href=user/settings.php"
    );

    exit();


}

header("Location:" . SRC_ROUTE . "/pages/index.php");
exit();


