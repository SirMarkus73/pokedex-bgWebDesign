<?php
session_start();
require_once __DIR__ . "/../../services/src_route.php";
require_once __DIR__ . "/../methods.php";
require_once __DIR__ . "/../env.php";

$username = get("username", null);
$card_id = get("id", null);
var_dump($card_id, $username);

$valid_passwd = false;
$conn = mysqli_connect(
    $_ENV["DB"],
    $_ENV["USER"],
    $_ENV["PASSWORD"],
    $_ENV["DBNAME"],
);
$sql = "SELECT username, cards FROM user_cards WHERE username='$username'";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error executing query: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $cards = explode(" ", $row["cards"]);
    $cards[] = $card_id;
    $cards = join(" ", $cards);
    $sql = "UPDATE user_cards SET cards = '$cards' WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
} else {
    $sql = "INSERT INTO user_cards (username) VALUES ('$username')";
    $result = mysqli_query($conn, $sql);

    header("Location: ./add_card.php?id=$card_id&username=$username");
    exit();
}

mysqli_close($conn);
header("Location: " . SRC_ROUTE . "/pages/cards/collection.php");