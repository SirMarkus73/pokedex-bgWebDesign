<?php
require_once __DIR__ . "/../../services/cookies/start_session.php";
require_once __DIR__ . "/../../services/src_route.php";
require_once __DIR__ . "/../methods.php";
require_once __DIR__ . "/../env.php";
require_once __DIR__ . "/../sql/methods.php";

$username = post("username", "");
$password = post("password", "");

$valid_passwd = false;
$conn = connect_to_db();


[$password_query, $user_password] = select_data_from_where(
    "usuarios",
    "user='$username'",
    ["password"],
    $conn
);

if (mysqli_num_rows($password_query) == 1) {


    if (password_verify($password, $user_password["password"])) {
        $_SESSION["usuario"] = $username;
        $_SESSION["image"] = SRC_ROUTE . "/assets/img/unown.png";
        $valid_passwd = true;
    }
}

if ($valid_passwd) {
    header("Location: " . SRC_ROUTE . "/pages/index.php");
} else {
    header(
        "Location: " .
        SRC_ROUTE .
        "/pages/error.php?title=Login Fallido&message=Usuario o contraseña incorrecta&href=" .
        SRC_ROUTE .
        "/pages/user/login.php"
    );
}

exit();
