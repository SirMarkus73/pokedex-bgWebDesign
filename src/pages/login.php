    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Page Title</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href="../css/style.css">
        <?php require("../services/imports.php") ?>
    </head>

    <body class="dark:bg-neutral-800 dark:text-white">
        <?php require("../components/header.php") ?>
        <main class="grid grid-cols-1 place-items-center md:grid-cols-3 content-center">
            <section>
                <img src="../assets/img/logo.webp" alt="Logo de PokeFull" class="w-96"></a>
            </section>

            <section class="md:col-span-2 border border-red-600 dark:border-fuchsia-700 p-10 w-max h-max">
                <form action="login.php" method="post" class="w-max flex flex-col gap-4 ">


                    <legend class="text-2xl">Formulario de inicio de sesión</legend>

                    <label for="username">Usuario:
                        <input type="text" id="username" placeholder="Ingresa tu usuario" required class="dark:bg-neutral-900">
                    </label>

                    <label for="password">Contraseña:
                        <input type="password" id="password" placeholder="Ingresa tu contraseña" required class="dark:bg-neutral-900">
                    </label>

                    <button type="submit">Inicio de sesión </button>





                </form>

                <hr class="border border-black dark:border-stone-50  w-1/2 my-5">

                <a href="register.php">Crear Cuenta</a>
            </section>
        </main>



    </body>

    </html>