<?php
require_once __DIR__ . "/../cookies/start_session.php";
require_once __DIR__ . "/../env.php";
require_once __DIR__ . "/../sql/methods.php";


function get_user_cards(): array
{
    $username = $_SESSION["usuario"];

    if (isset($username)) {
        $conn = connect_to_db();
        [$cards_query, $user_cards] = select_data_from_where(
            "user_cards",
            "user='$username'",
            ["cards"],
            $conn
        );

        if (mysqli_num_rows($cards_query) == 1) {
            return explode(" ", $user_cards["cards"]);
        }
    }

    return [];

}



