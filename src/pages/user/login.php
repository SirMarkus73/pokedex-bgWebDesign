<?php require_once __DIR__ . "/../../services/imports.php"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Pokefull - Iniciar sesión</title>
    <?php render_component("global/head"); ?>
</head>

<body>
<?php
render_component("global/loader");
render_component("global/header");
?>
<main class="grid grid-cols-1 place-items-center md:grid-cols-3 content-center p-5 justify-center">
    <?php render_component("login/content"); ?>
</main>


</body>

</html>