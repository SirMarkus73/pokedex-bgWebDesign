<?php
require_once("../services/post.php");
require_once("../services/env.php");

$username = post("username", "");
$email = post("email", "");
$password = post("password", "");
$hash_password = password_hash($password, PASSWORD_DEFAULT);


$successful = post("successful", "false");

if ($successful == "true") {
    $conn = mysqli_connect($_ENV["DB"], $_ENV["USER"], $_ENV["PASSWORD"], $_ENV["DBNAME"]);
    $sql = "INSERT INTO usuarios (usuario, contraseña) VALUES ('$username', '$hash_password');";

    $result = mysqli_query($conn, $sql);

    header("Location: ../pages/login.php");
}
