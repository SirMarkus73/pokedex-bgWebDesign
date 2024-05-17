<?php
session_start();
require_once __DIR__ . "/../../methods.php";
require_once __DIR__ . "/../../env.php";
require_once __DIR__ . "/../../protected_page.php";
require_once __DIR__ . "/../../../services/src_route.php";

$username = post("username", " ");
$new_username = post("new-username", ""); // Nuevo nombre de usuario

function modify_user_from(string $table, string $username, string $new_username = ""): bool
{
    $conn = mysqli_connect(
        $_ENV["DB"],
        $_ENV["USER"],
        $_ENV["PASSWORD"],
        $_ENV["DBNAME"]
    );

    $sql = "SELECT user FROM $table WHERE user='$username'";

    // Resultados de la consulta
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        // Si se proporcionó un nuevo nombre de usuario, actualiza el nombre de usuario en la base de datos
        if (!empty($new_username)) {
            $new_username = mysqli_real_escape_string($conn, $new_username);
            $updateSql = "UPDATE $table SET user='$new_username' WHERE user='$username'";
            mysqli_query($conn, $updateSql);

            return true;
        }

    }

    return false;
}

if ($username != $new_username) {

    $is_user_modified = modify_user_from("usuarios", $username, $new_username);
    $is_user_modified_from_cards = modify_user_from("user_cards", $username, $new_username);

    if ($is_user_modified && $is_user_modified_from_cards) {
        $_SESSION["usuario"] = $new_username;
        header("Location: " . SRC_ROUTE . "/pages/index.php");
        exit();
    }
}

header(
    "Location:" . SRC_ROUTE . "/pages/error.php?title=No se ha podido modificar el usuario&message=No se ha podido cambiar el nombre de usuario, por favor inténtelo mas tarde&href=user/settings.php"
);
exit();
