<?php
session_start();
require_once __DIR__ . "/../../methods.php";
require_once __DIR__ . "/../../env.php";
require_once __DIR__ . "/../../protected_page.php";
require_once __DIR__ . "/../../../src_route.php";

$username = post("username", " ");
$new_username = post("new-username", ""); // Nuevo nombre de usuario

if ($username != $new_username) {
    $conn = mysqli_connect(
        $_ENV["DB"],
        $_ENV["USER"],
        $_ENV["PASSWORD"],
        $_ENV["DBNAME"]
    );
    $sql = "SELECT user FROM usuarios WHERE user='$username'";

    // Resultados de la consulta
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Si se proporcionó un nuevo nombre de usuario, actualiza el nombre de usuario en la base de datos
        if (!empty($new_username)) {
            $new_username = mysqli_real_escape_string($conn, $new_username);
            $updateSql = "UPDATE usuarios SET user='$new_username' WHERE user='$username'";
            mysqli_query($conn, $updateSql);
        }
        //Cambia el usuario de la session de la cookie
        $_SESSION["usuario"] = $new_username;
    }
}

header("Location: " . SRC_ROUTE . "/pages/index.php");

exit();
