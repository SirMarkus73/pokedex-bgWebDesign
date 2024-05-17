<?php
require_once __DIR__ . "/../methods.php";
require_once __DIR__ . "/../src_route.php";
require_once __DIR__ . "/../env.php";
require_once __DIR__ . "/../sql/methods.php";

$password = get("password", null);
$admin_password = $_ENV["ADMIN_PASSWORD"];

if ($password === $admin_password) {

    $truncated = truncate_table_from("usuarios");
    if ($truncated) {
        header("Location:" . SRC_ROUTE . "/services/user/delete_user_cards.php?password=" . $admin_password);
        exit();
    }

    header(
        "Location:" . SRC_ROUTE . "/pages/error.php?title=Error al borrar los usuarios, contacte con el programador de turno&href=user/settings.php"
    );
    exit();
}

header("Location:" . SRC_ROUTE . "/pages/index.php");
exit();

