<?php require_once(__DIR__ . "/../services/imports.php") ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/style.css">
</head>

<body id="settings">
    <?php require_once("../components/header.php") ?>
    <div class="form-control" class="row-span-7">

        <p>Light Mode <input type="checkbox" class="toggle dark:[--tglbg:fuchsia] dark:bg-neutral-200 dark:hover:bg-fuchsia-600 dark:border-neutral-800" style="color: white" id="toggle-dark-mode" checked />
            Dark Mode</p>

    </div>

    <div>

        <p>Cambiar foto de perfil
            <input type="file" class="file-input file-input-bordered w-full max-w-xs" />
        </p>

    </div>

    <div>



        <p>Cambiar contraseña </p>
        <input type="password" id="nueva_contrasena" name="nueva_contrasena" style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; margin-bottom: 10px;" required>
        <p>Nueva contraseña</p>
        <input type="password" id="nueva_contrasena" name="nueva_contrasena" style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; margin-bottom: 10px;" required>
        <p>Repetir la contraseña Nueva</p>
        <input type="password" id="nueva_contrasena" name="nueva_contrasena" style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; margin-bottom: 10px;" required>
        <button type="submit" class="btn btn-outline btn-error dark:btn-secondary">Cambiar contraseña </button>

    </div>

    <div>

        <title>Cambiar nombre user</title>
        <p>Cambiar nombre de usuario</p>





        <input type="text" id="nuevo_nombre" name="nuevo_nombre" style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; margin-bottom: 10px;" required>
        <p>Nuevo Usuario</p>
        <input type="text" id="nuevo_nombre" name="nuevo_nombre" style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; margin-bottom: 10px;" required>
        <button type="submit" class="btn btn-outline btn-error dark:btn-secondary">Cambiar Usuario </button>


    </div>

    </form>
</body>

</html>