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
    <section class="grid md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4">
        <?php render_component("card_collection/show_collection"); ?>
    </section>
    <section class="flex justify-center text-center w-full py-3">
        <a class="btn btn-ghost btn-outline btn-error dark:btn-secondary w-2/3" href="index.php">Añadir mas
            cartas</a>
    </section>
</main>
</body>

</html>