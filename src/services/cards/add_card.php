<?php
require_once __DIR__ . "/../cookies/start_session.php";
require_once __DIR__ . "/../../services/src_route.php";
require_once __DIR__ . "/../methods.php";
require_once __DIR__ . "/../env.php";
require_once __DIR__ . "/../sql/methods.php";


$username = get("username", null);
$card_id = get("id", null);
var_dump($card_id, $username);

$valid_passwd = false;
$conn = connect_to_db();

[$cards_query, $user_data] = select_data_from_where("user_cards", "user='$username'", ["user", "cards"], $conn);

if (mysqli_num_rows($cards_query) == 1) {

    $cards = explode(" ", $user_data["cards"]);
    $cards[] = $card_id;
    $new_cards = join(" ", $cards);

    update_data_from_where(
        "user_cards",
        "user='$username'",
        "cards",
        $new_cards,
        $conn
    );


} else {

    insert_data_to("user_cards", ["user"], [$username], $conn);

    header("Location: ./add_card.php?id=$card_id&username=$username");
    exit();
}

mysqli_close($conn);
header("Location: " . SRC_ROUTE . "/pages/cards/collection.php");