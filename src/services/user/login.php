<?php
require_once(__DIR__ . "/../../src_route.php");
require_once(__DIR__ . "/../methods.php");
require_once(__DIR__ . "/../env.php");
session_start();

$username = post("username", "");
$password = post("password", "");



$contrasenya_correcta = false;
$conn = mysqli_connect($_ENV["DB"], $_ENV["USER"], $_ENV["PASSWORD"], $_ENV["DBNAME"]);
$sql = "SELECT password FROM usuarios WHERE user='$username'";

// Resultados de la consulta
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row["password"])) {

        $_SESSION['usuario'] = $username;
        $contrasenya_correcta = true;
    }
}


if ($contrasenya_correcta) {
    header("Location: " . SRC_ROUTE . "/pages/index.php");
} else {
    header("Location: " . SRC_ROUTE . "/pages/error.php?title=Login Fallido&message=Usuario o contrasenya incorrecta&href=login.php");
}

exit();
