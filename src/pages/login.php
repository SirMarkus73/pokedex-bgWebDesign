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
    <main class="flex m-auto w-max">
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
            <br><button type="submit">Inicio de sesión </button>

            </fieldset>
        </form>
    </main>

    <br><p>Nota: Si te has olvidado de la contraseña no se puede recuperar a no ser que contacte con nosotros para enviarle la nueva contraseña o la que ya habías puesto cuando habías iniciado sesión.</p>
</body> 
</html> 