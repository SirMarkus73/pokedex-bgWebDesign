<?php
require_once(__DIR__ . "/../../services/imports.php");
require_once(__DIR__ . "/../../services/protected_page.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php render_component("global/head", ["title" => "Pokefull - Configuración"]) ?>
</head>

<body id="settings">

    <?php
    render_component("global/loader");
    render_component("global/header")
    ?>
    <main class="p-6 flex flex-col gap-3">

        <h1 class="text-3xl font-bold text-center">Configuración</h1>
        <section class="border border-red-600 dark:border-fuchsia-700 py-5 flex flex-col gap-10 justify-center text-center ">
            <?php
            render_component("settings/change_image");
            render_component("settings/change_password");
            render_component("settings/change_username");
            ?>
        </section>

        <section>
            <?php render_component("settings/logout") ?>
        </section>
    </main>
</body>

</html>