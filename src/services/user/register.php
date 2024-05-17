<?php
require_once __DIR__ . "/../../services/src_route.php";
require_once __DIR__ . "/../methods.php";
require_once __DIR__ . "/../env.php";
require_once __DIR__ . "/../sql/methods.php";

$username = post("username", "");
$password = post("password", "");
$repeated_password = post("password-repeat", " ");
$hash_password = password_hash($password, PASSWORD_DEFAULT);

if ($password != $repeated_password) {
    header(
        "Location: " .
        SRC_ROUTE .
        " /pages/error.php?title=Registro Fallido&message=La contraseña y la confirmación no coincide, inténtelo de nuevo&href=register.php"
    );
    exit();
}

$db_conn = connect_to_db();

$data_insert = insert_data_to(
    "usuarios",
    ["user", "password"],
    [$username, $hash_password],
    $db_conn
);

mysqli_close($db_conn);

if ($data_insert) {
    header("Location: " . SRC_ROUTE . "/pages/user/login.php");
} else {
    header(
        "Location: " .
        SRC_ROUTE .
        "/pages/error.php?title=Registro Fallido&message=El registro ha fallado, por favor inténtelo mas tarde&href=" .
        SRC_ROUTE .
        "/pages/user/register.php"
    );
}
exit();
