<html lang="es">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href="../css/style.css">
    <?php require_once("../services/imports.php") ?>
</head>

<body class="dark:bg-neutral-800 dark:text-white">
    <?php require("../components/header.php") ?>


    <main class="grid grid-cols-1 md:grid-cols-3 place-items-center content-center">
        <section>
            <img src="../assets/img/logo.webp" alt="Logo de PokeFull" class="w-96"></a>
        </section>
        <section class="md:col-span-2 border border-red-600 dark:border-fuchsia-700 p-10">

            <form action="../services/register.php" method="post" class="w-max flex flex-col gap-4">
                <legend class="text-2xl">Formulario de registro</legend>

                <label for="username">Usuario:
                    <input type="text" id="username" name="username" placeholder="Ingresa tu usuario" required class="dark:bg-neutral-900" maxlength="20">
                </label>

                <label for="password">Contraseña:
                    <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required class="dark:bg-neutral-900" minlength="12">
                </label>

                <label for="email">Email:
                    <input type="email" id="email" name="email" placeholder="Ingresa tu email" required class="dark:bg-neutral-900">
                </label>

                <input type="hidden" name="successful" value="true">
                <button type="submit">Registrarse</button>

            </form>

            <hr class="border-stone-50 border w-1/2 my-5">

            <a href="login.php">Iniciar Sesión</a>
        </section>

    </main>


</body>

</html>