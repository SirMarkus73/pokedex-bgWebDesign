<?php
require_once __DIR__ . "/../../services/imports.php";

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <?php render_component("global/head", ["title" => "Pokefull - Colección"]); ?>
</head>

<body>
<?php
render_component("global/loader");
render_component("global/header");
?>
<main>
    <?php render_component("card_collection/show_collection"); ?>
</main>
</body>

</html>