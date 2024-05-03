<?php require_once(__DIR__ . "/../services/imports.php") ?>

<html lang="es">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href="../css/style.css">

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php require_once(__DIR__ . "/../components/header.php") ?>


    <main class="grid grid-cols-1 place-items-center md:grid-cols-3 content-center my-5 justify-center">
        <section class="max-md:hidden">
            <img src="../assets/img/logo.webp" alt="Logo de PokeFull" class="w-96"></a>
        </section>
        <section class="md:col-span-2 border border-red-600 dark:border-fuchsia-700 p-10">

            <form action="../services/register.php" method="post" class="w-max flex flex-col gap-4">
                <legend class="text-2xl">Registrarse</legend>

                <label for="username">Usuario:
                    <input type="text" id="username" name="username" placeholder="Ingresa tu usuario" required class="dark:bg-neutral-900" maxlength="20">
                </label>

                <label for="password">Contraseña:
                    <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required class="dark:bg-neutral-900">
                </label>

                <input type="hidden" name="successful" value="true">
                <button type="submit">Registrarse</button>

            </form>

            <hr class="border border-black dark:border-stone-50  w-1/2 my-5">

            <a href="login.php">Iniciar Sesión</a>
        </section>

    </main>


</body>

</html>