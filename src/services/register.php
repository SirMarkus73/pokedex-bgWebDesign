<?php
require_once(__DIR__ . "/methods.php");
require_once(__DIR__ . "/env.php");

$username = post("username", "");
$password = post("password", "");
$hash_password = password_hash($password, PASSWORD_DEFAULT);

$successful = post("successful", "false");

if ($successful == "true") {
    $conn = mysqli_connect($_ENV["DB"], $_ENV["USER"], $_ENV["PASSWORD"], $_ENV["DBNAME"]);
    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO usuarios (user, password) VALUES ('$username', '$hash_password')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../pages/login.php");
    } else {
        header("Location: ../pages/error.php?title=Registro Fallido&message=El registro ha fallado, por favor inténtelo mas tarde&href=register.php");
    }

    mysqli_close($conn);
}
