<?php
require_once __DIR__ . "/../../cookies/start_session.php";
require_once __DIR__ . "/../../methods.php";
require_once __DIR__ . "/../../env.php";
require_once __DIR__ . "/../../protected_page.php";
require_once __DIR__ . "/../../../services/src_route.php";
require_once __DIR__ . "/../../sql/methods.php";


$username = post("username", " "); // Nombre de usuario guardado en la cookie
$current_username = post("current-username", ""); // Nombre de usuario dado por el usuario

if ($username == $current_username) {
    $conn = connect_to_db();
    delete_from_where(
        "usuarios",
        "user = '$username'",
        $conn
    );
}

header("Location: " . SRC_ROUTE . "/services/user/logout.php");

exit();
