<?php
require_once(__DIR__ . "/../../services/methods.php");

$title = get("title", "ERROR");
$message = get("message", "ERROR");
$href = get("href", "index.php");
?>

<h1 class="text-error text-center my-3 text-3xl "><?= $title ?></h1>
<p class="text-error text-center my-3 text-lg"><?= $message ?></p>
<p class="text-error text-center my-3 text-lg">
    <a href="<?= $href ?>">Volver a intentarlo</a">
</p>