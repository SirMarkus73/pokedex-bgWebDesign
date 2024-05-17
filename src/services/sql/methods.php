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

function truncate_table_from(string $table, mysqli $connection): bool|mysqli_result
{
    $sql = "TRUNCATE table $table";
    return mysqli_query($connection, $sql);
}

function delete_from_where(string $table, string $validation, mysqli $connection): bool|mysqli_result
{
    $sql = "DELETE FROM $table WHERE $validation";
    return mysqli_query($connection, $sql);
}


function insert_data_to(string $table, array $columns, array $data, mysqli $connection): bool|mysqli_result
{
    $columns_string = implode(", ", $columns);
    $data_string = "'" . implode("', '", $data) . "'";

    $sql = "INSERT INTO $table ($columns_string) VALUES ($data_string)";
    return mysqli_query($connection, $sql);
}

function select_data_from_where(string $table, string $validation, array $columns, mysqli $connection): array
{
    $columns_string = implode(", ", $columns);

    $sql = "SELECT $columns_string FROM $table  WHERE $validation";
    $query = mysqli_query($connection, $sql);

    return [$query, mysqli_fetch_assoc($query)];
}

function update_data_from_where(string $table, string $validation, string $column, string $data, mysqli $connection): bool|mysqli_result
{
    $sql = "UPDATE $table SET $column = '$data' WHERE $validation";
    return mysqli_query($connection, $sql);
}