<?php
require_once(__DIR__ . "/methods.php");
require_once(__DIR__ . "/env.php");

$username = post("username", "");
$email = post("email", "");
$password = post("password", "");
$hash_password = password_hash($password, PASSWORD_DEFAULT);

$successful = post("successful", "false");

if ($successful == "true") {
    $conn = mysqli_connect($_ENV["DB"], $_ENV["USER"], $_ENV["PASSWORD"], $_ENV["DBNAME"]);
    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO usuarios (user, password, creation_date) VALUES ('$username', '$hash_password', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "Funciona";
    } else {
        echo "Error al insertar datos: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
