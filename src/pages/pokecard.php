<?php require_once(__DIR__ . "/../services/imports.php") ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php render_component("global/head", ["title" => "Pokefull - Cartas"]) ?>
</head>

<body>
    <?php
    require_once(__DIR__ . "/../services/loader.php");
    require_once(__DIR__ . "/../components/header.php");
    ?>
    <main>
        <?php
        require_once(__DIR__ . "/../components/card_collection/card.php");
        require_once(__DIR__ . "/../components/card_collection/card_searcher.php");
        ?>
    </main>
</body>

</html>