<?php
session_start();
require_once __DIR__ . "/../env.php";

$username = $_SESSION["usuario"];

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
        $cards = explode(" ", $row["cards"]);
        return $cards;
    }
}
return null;