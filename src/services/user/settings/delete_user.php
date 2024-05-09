<?php
session_start();
require_once __DIR__ . "/../../methods.php";
require_once __DIR__ . "/../../env.php";
require_once __DIR__ . "/../../protected_page.php";
require_once __DIR__ . "/../../../src_route.php";

$username = post("username", " "); // Nombre de usuario guardado en la cookie
$current_username = post("current-username", ""); // Nombre de usuario dado por el usuario

if ($username == $current_username) {
    $conn = mysqli_connect(
        $_ENV["DB"],
        $_ENV["USER"],
        $_ENV["PASSWORD"],
        $_ENV["DBNAME"]
    );
    $sql = "DELETE FROM usuarios WHERE user = '$username';";

    // Resultados de la consulta
    $result = mysqli_query($conn, $sql);
}

header("Location: " . SRC_ROUTE . "/services/user/logout.php");

exit();
