<?php
require_once("../services/post.php");
require_once("../services/env.php");

$username = post("username", "prueba");
$email = post("email", "");
$password = post("password", "");
$hash_password = password_hash($password, PASSWORD_DEFAULT);

$successful = post("successful", "false");

if ($successful == "true") {
    $conn = mysqli_connect($_ENV["DB"], $_ENV["USER"], $_ENV["PASSWORD"], $_ENV["DBNAME"]);
    $sql = "INSERT INTO usuarios (user, password) VALUES ('$username', '$hash_password');";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../pages/login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
