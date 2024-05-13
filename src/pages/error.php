<?php
require_once __DIR__ . "/../services/imports.php";
require_once __DIR__ . "/../services/methods.php";

$title = get("title", "ERROR");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php render_component("global/head", ["title" => "Pokefull - $title"]); ?>

</head>

<body>
<?php
render_component("global/loader");
render_component("global/header");
?>

<main class="flex flex-col items-center justify-center h-3/4 gap-5">
    <?php render_component("error/content"); ?>
</main>
</body>

</html>