<?php
require_once(__DIR__ . "/methods.php");
require_once(__DIR__ . "/env.php");
session_start();

$username = post("username", " ");
$newUsername = post("newUsername", ""); // Nuevo nombre de usuario



if ($username != $newUsername) {
    $conn = mysqli_connect($_ENV["DB"], $_ENV["USER"], $_ENV["PASSWORD"], $_ENV["DBNAME"]);
    $sql = "SELECT user FROM usuarios WHERE user='$username'";

    // Resultados de la consulta
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);




        // Si se proporcionó un nuevo nombre de usuario, actualiza el nombre de usuario en la base de datos
        if (!empty($newUsername)) {
            $newUsername = mysqli_real_escape_string($conn, $newUsername);
            $updateSql = "UPDATE usuarios SET user='$newUsername' WHERE user='$username'";
            mysqli_query($conn, $updateSql);
        }
        //Cambia el usuario de la session de la cookie
        $_SESSION['usuario'] = $newUsername;
    }
}

header("Location: ../pages/index.php");

exit();
