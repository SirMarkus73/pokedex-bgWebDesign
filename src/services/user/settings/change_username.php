<?php
require_once __DIR__ . "/../../cookies/start_session.php";
require_once __DIR__ . "/../../methods.php";
require_once __DIR__ . "/../../env.php";
require_once __DIR__ . "/../../protected_page.php";
require_once __DIR__ . "/../../../services/src_route.php";
require_once __DIR__ . "/../../sql/methods.php";


$username = post("username", " ");
$new_username = post("new-username", ""); // Nuevo nombre de usuario

if ($username != $new_username) {

    $db_conn = connect_to_db();

    $is_user_modified = update_data_from_where(
        "usuarios",
        "user = '$username'",
        "user",
        $new_username,
        $db_conn
    );

    $is_user_modified_from_cards = update_data_from_where(
        "user_cards",
        "user = '$username'",
        "user",
        $new_username,
        $db_conn
    );

    mysqli_close($db_conn);

    if ($is_user_modified && $is_user_modified_from_cards) {
        $_SESSION["usuario"] = $new_username;
        header("Location: " . SRC_ROUTE . "/pages/index.php");
        exit();
    }
}

header(
    "Location:" . SRC_ROUTE . "/pages/error.php?title=No se ha podido modificar el usuario&message=No se ha podido cambiar el nombre de usuario, por favor inténtelo mas tarde&href=user/settings.php"
);
exit();
