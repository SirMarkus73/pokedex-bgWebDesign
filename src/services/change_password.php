<?php
require_once(__DIR__ . "/methods.php");
require_once(__DIR__ . "/env.php");
require_once(__DIR__ . "/../services/protected_page.php");
session_start();

$input_password = post("password", " ");

$new_password = post("new_password", "");
$repeated_password = post("password_repeat", " ");
$new_hash_password = password_hash($new_password, PASSWORD_DEFAULT);
$username = post("username", " ");



if ($new_password != $repeated_password) {
    header("Location: ../pages/error.php?title=Registro Fallido&message=La contraseña y la confirmación no coincide, inténtelo de nuevo&href=register.php");
    exit();
}

$conn = mysqli_connect($_ENV["DB"], $_ENV["USER"], $_ENV["PASSWORD"], $_ENV["DBNAME"]);
$sql = "SELECT user, password FROM usuarios WHERE user='$username';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


if (password_verify($input_password, $row['password'])) {
    echo "las contraseñas coinciden";
    if (!password_verify($row["password"], $new_hash_password)) {
        echo "las contraseñas coinciden no";

        if (!empty($new_password)) {
            $new_password = mysqli_real_escape_string($conn, $new_password);
            $updateSql = "UPDATE usuarios SET password='$new_hash_password' WHERE user='$username';";

            mysqli_query($conn, $updateSql);
        }
    }
}

/* header("Location: ../pages/index.php");

exit(); */
