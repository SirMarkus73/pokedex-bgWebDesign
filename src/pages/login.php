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
    <main class="grid grid-cols-2 place-items-center">
        <img src="../assets/img/logo.webp" alt="Logo de PokeFull" class="w-96"></a>

            <form action="login.php" method="post" class="border: shadow-fuchsia-100">
                <fieldset>

            <legend class="text-2xl">Formulario de inicio de sesión</legend>
                <!-- Campo de Usuario -->   
                <br> <label  for="username">Usuario:</label>
                <br><input  type="text" id="username" placeholder="Ingresa tu usuario" required class="dark:bg-neutral-900">

                <!-- Campo de Contraseña -->
                <br><label for="password">Contraseña:</label>
                <br> <input type="password" id="password" placeholder="Ingresa tu contraseña" required class="dark:bg-neutral-900">

                </fieldset>


                <fieldset>
                <!-- Opción para mantener la sesión iniciada -->
                <br><input type="checkbox" id="remember">
                <label for="remember">Mantener sesión iniciada</label>

                <!-- Botón de Inicio de Sesión -->
                <br><br><button type="submit">Inicio de sesión </button>

                <br><br><a href="registrar.php">Crear Cuenta</a>

                </fieldset>
            </form>

    <p>Inicia sesión en PokeFull Crack. Acuérdate de no perder la contraseña</p> ________________
        </main>

        

    </body> 
    </html> 