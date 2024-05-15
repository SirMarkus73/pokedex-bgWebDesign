<?php
session_start();
require_once __DIR__ . "/../env.php";

function get_user_cards()
{
    $username = $_SESSION["usuario"];
    $cards = null;

    if (isset($username)) {
        $conn = mysqli_connect(
            $_ENV["DB"],
            $_ENV["USER"],
            $_ENV["PASSWORD"],
            $_ENV["DBNAME"],
        );

        $sql = "SELECT username, cards FROM user_cards WHERE username='$username'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $user_cards = explode(" ", $row["cards"]);
            $cards = $user_cards;
        }
    }

    return $cards;

}



