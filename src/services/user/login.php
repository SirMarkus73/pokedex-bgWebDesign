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

$sql = "SELECT password FROM usuarios WHERE user='$username'";

// Resultados de la consulta
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row["password"])) {
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
