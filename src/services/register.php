<?php
require_once(__DIR__ . "/../src_route.php");
require_once(__DIR__ . "/methods.php");
require_once(__DIR__ . "/env.php");

$username = post("username", "");
$password = post("password", "");
$repeated_password = post("password-repeat", " ");
$hash_password = password_hash($password, PASSWORD_DEFAULT);





if ($password != $repeated_password) {
    header("Location: " . SRC_ROUTE . " /pages/error.php?title=Registro Fallido&message=La contraseña y la confirmación no coincide, inténtelo de nuevo&href=register.php");
    exit();
}

$conn = mysqli_connect($_ENV["DB"], $_ENV["USER"], $_ENV["PASSWORD"], $_ENV["DBNAME"]);
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

$sql = "INSERT INTO usuarios (user, password) VALUES ('$username', '$hash_password')";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header("Location: " . SRC_ROUTE . " /pages/user/login.php");
    exit();
} else {
    mysqli_close($conn);
    header("Location: " . SRC_ROUTE . "/pages/error.php?title=Registro Fallido&message=El registro ha fallado, por favor inténtelo mas tarde&href=register.php");
    exit();
}
