<?php require_once(__DIR__ . "/../services/imports.php") ?>
<?php require_once(__DIR__ . "/../services/methods.php") ?>

<?php

$title = get("title", "ERROR");
$message = get("message", "ERROR");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Fallido</title>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body class="text-center">
    <?php require_once(__DIR__ . "/../components/header.php") ?>
    <h1 class="text-error text-center my-3 text-3xl "><?= $title ?></h1>
    <p class="text-error text-center my-3 text-lg"><?= $message ?></p>
</body>

</html>