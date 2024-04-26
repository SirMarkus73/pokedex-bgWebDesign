<?php 
require_once("../../vendor/autoload.php");

$dotenv = Dotenv\Dotenv::createImmutable("../../");
$dotenv->load();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>env vars test</title>
</head>
<body>
    <?= $_ENV["TEST"] ?>
</body>
</html>