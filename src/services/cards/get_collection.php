<?php
require_once __DIR__ . "/../cookies/start_session.php";
require_once __DIR__ . "/../env.php";

function get_user_cards(): array
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

        $sql = "SELECT user, cards FROM user_cards WHERE user='$username'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $user_cards = explode(" ", $row["cards"]);
            $cards = $user_cards;
        }
    }

    return $cards;

}



