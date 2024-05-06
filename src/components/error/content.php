<?php
require_once(__DIR__ . "/../../services/methods.php");

$title = get("title", "ERROR");
$message = get("message", "ERROR");
$href = get("href", "index.php");
?>

<h1 class="text-error text-center text-3xl "><?= $title ?></h1>
<p class="text-error text-center text-2xl"><?= $message ?></p>

<a href="<?= $href ?>" class="text-error text-center text-lg btn btn-error btn-ghost btn-outline">Volver a intentarlo</a>