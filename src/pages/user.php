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

    <section class="md:col-span-2 border border-red-600 dark:border-fuchsia-700 p-10 w-max h-max">
    <button class="btn" onclick="my_modal_1.showModal()">Cambiar contraseña</button>
<dialog id="my_modal_1" class="modal">
  <div class="modal-box">
    <h3 class="font-bold text-lg">Cambiar contraseña</h3>
    <p class="py-4"><input type="password"  name="new" style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; margin-bottom: 10px;" required>
    <p>Nueva contraseña</p>
    <input type="password"  name="nueva_passwd" style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; margin-bottom: 10px;" required>
    <p>Repetir la contraseña Nueva</p>
    <input type="password"  name="nueva_contraseña" style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; margin-bottom: 10px;" required>
    <button type="submit" class="btn btn-outline btn-error dark:btn-secondary">Cambiar contraseña </button></p>
    <div class="modal-action">
      <form method="dialog">
        <!-- if there is a button in form, it will close the modal -->
        <button class="btn">Close</button>
      </form>
    </div>
  </div>
</dialog>
</section>
   

    
<section class="md:col-span-2 border border-red-600 dark:border-fuchsia-700 p-10 w-max h-max">
<button class="btn" onclick="my_modal_2.showModal()">Cambiar Nombre</button>
<dialog id="my_modal_2" class="modal">
  <div class="modal-box">
    <h3 class="font-bold text-lg">Cambiar nombre</h3>
    <p class="py-4">
    <input type="text"  name="nuevo_nombre" style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; margin-bottom: 10px;" required>
    <p>Nuevo Usuario</p>
    <input type="text"  name="nuevo_nombre" style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; margin-bottom: 10px;" required>
    <button type="submit" class="btn btn-outline btn-error dark:btn-secondary">Cambiar Usuario </button>
</p>
  </div>
  <form method="dialog" class="modal-backdrop">
    <button>close</button>
  </form>
</dialog>
</section>
    

    

    <div>
    <a href="/src/services/logout.php"> Logout</a>
    </div>

</form>
</body>

</html>