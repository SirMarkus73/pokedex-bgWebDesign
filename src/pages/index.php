<?php require_once __DIR__ . "/../services/imports.php"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Pokefull - Inicio</title>
    <?php render_component("global/head"); ?>
</head>

<body>
<?php
render_component("global/loader");
render_component("global/header");
?>

<main class="p-5 flex flex-col gap-5">

    <?php render_component("index/content"); ?>

</main>

</body>

</html>