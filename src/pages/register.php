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


    <main class="grid grid-cols-1 md:grid-cols-3 place-items-center">
        <section>
            <img src="../assets/img/logo.webp" alt="Logo de PokeFull" class="w-96"></a>
        </section>
        <section class="md:col-span-2">

            <form action="registro.php" method="post" class="border: shadow-fuchsia-100">


                <legend class="text-2xl">Formulario de registro</legend>


                <!-- Campo de Usuario -->
                <br> <label for="username">Usuario:</label>
                <br><input type="text" id="username" placeholder="Ingresa tu usuario" required class="dark:bg-neutral-900">

                <!-- Campo de Contraseña -->
                <br><label for="password">Contraseña:</label>
                <br> <input type="password" id="password" placeholder="Ingresa tu contraseña" required class="dark:bg-neutral-900">



                <!-- Otros campos como correo electrónico, nombre completo, etc. -->
                <br> <label for="email">Email:</label>
                <br> <input type="email" id="email" placeholder="Ingresa tu email" required class="dark:bg-neutral-900">

                <br> <br> <button type="submit">Registrarse</button>

            </form>

            <hr class="border-stone-50 border w-1/2 my-5">

            <a href="login.php">Iniciar Sesión</a>
        </section>

    </main>


</body>

</html>