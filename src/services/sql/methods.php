<?php
require_once __DIR__ . "/../env.php";

function connect_to_db(): false|mysqli
{
    return mysqli_connect(
        $_ENV["DB"],
        $_ENV["USER"],
        $_ENV["PASSWORD"],
        $_ENV["DBNAME"]
    );
}

function truncate_table_from(string $table, mysqli $connection): bool
{
    $sql = "TRUNCATE table $table";
    return mysqli_query($connection, $sql);
}