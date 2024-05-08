<?php require_once __DIR__ . "/../../services/imports.php"; ?>

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
        <?php
        render_component("card_collection/searchbar");
        render_component("card_collection/card");
        render_component("card_collection/card_searcher");
        ?>
    </main>
</body>

</html>