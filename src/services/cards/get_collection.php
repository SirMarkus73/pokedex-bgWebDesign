<?php
require_once __DIR__ . "/../cookies/start_session.php";
require_once __DIR__ . "/../env.php";
require_once __DIR__ . "/../sql/methods.php";


function get_user_cards(): array
{
    $username = $_SESSION["usuario"];
    $cards = null;

    if (isset($username)) {
        $conn = connect_to_db();

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



