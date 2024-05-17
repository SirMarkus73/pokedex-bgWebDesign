<?php
require_once __DIR__ . "/../../cookies/start_session.php";
require_once __DIR__ . "/../../methods.php";
require_once __DIR__ . "/../../env.php";
require_once __DIR__ . "/../../protected_page.php";
require_once __DIR__ . "/../../../services/src_route.php";
require_once __DIR__ . "/../../sql/methods.php";

$input_password = post("password", " ");

$new_password = post("new_password", "");
$repeated_password = post("password_repeat", " ");
$new_hash_password = password_hash($new_password, PASSWORD_DEFAULT);
$username = post("username", " ");

if ($new_password != $repeated_password ||
    empty($new_password)) {
    header(
        "Location:" . SRC_ROUTE . "/pages/error.php?title=Registro Fallido&message=La contraseña y la confirmación no coincide, inténtelo de nuevo&href=register.php"
    );
    exit();
}

$db_conn = connect_to_db();

[$_, $user_data] = select_data_from_where(
    "usuarios",
    "user='$username'",
    ["user", "password"],
    $db_conn
);

$password_from_db = $user_data["password"];


if (password_verify($input_password, $password_from_db) &&
    !password_verify($password_from_db, $new_hash_password)) {

    update_data_from_where(
        "usuarios",
        "user='$username'",
        "password",
        $new_hash_password,
        $db_conn
    );
}

header("Location: " . SRC_ROUTE . "/pages/index.php");

exit();
