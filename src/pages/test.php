<!DOCTYPE html>
<html lang="es">


<?php

require_once("../../vendor/autoload.php");

$dotenv = Dotenv\Dotenv::createImmutable("../../");
$dotenv->load();

?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1 class="text-4xl text-pink-800 hover:bg-orange-600 transition-colors">A</h1>
    <?= $_ENV["TEST"] ?>
</body>

</html>