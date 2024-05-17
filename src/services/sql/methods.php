<?php
require_once __DIR__ . "/../env.php";

function truncate_table_from(string $table): bool
{
    $conn = mysqli_connect(
        $_ENV["DB"],
        $_ENV["USER"],
        $_ENV["PASSWORD"],
        $_ENV["DBNAME"]
    );

    $sql = "TRUNCATE table $table";
    $result = mysqli_query($conn, $sql);

    if ($result === false) {
        return false;
    }
    return true;
}