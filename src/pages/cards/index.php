<?php
require_once __DIR__ . "/../../services/imports.php";
require_once __DIR__ . "/../../services/methods.php";
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <?php render_component("global/head", ["title" => "Pokefull - Cartas"]); ?>
</head>

<body>
    <?php
    render_component("global/loader");
    render_component("global/header");
    ?>
    <main>
        <?php render_component("card_collection/card_searcher"); ?>
        <?php render_component("card_collection/card", [
            "id" => get("id", null),
        ]); ?>
    </main>
</body>

</html>