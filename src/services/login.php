<?php
require_once("../services/post.php");
require_once("../services/env.php");
session_start();

$username = post("username", "");
$password = post("password", "");

$successful = post("successful", "false");


if ($successful == "true") {
    $contrasenya_correcta = false;
    $conn = mysqli_connect($_ENV["DB"], $_ENV["USER"], $_ENV["PASSWORD"], $_ENV["DBNAME"]);
    $sql = "SELECT contraseña FROM usuarios WHERE usuario='$usuari'";

    // Resultados de la consulta
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["contraseña"])) {

            $_SESSION['usuari'] = $usuari;
            $contrasenya_correcta = true;
        }
    }
}

if ($contrasenya_correcta) {
    header("Location: ../pages/index.php");
} else {
    header("Location: ../pages/login_fallido.php");
}
