<?php
require_once(__DIR__ . "/../services/imports.php");
require_once(__DIR__ . "/../services/protected_page.php");
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.webp">
</head>

<body id="settings">

    <?php
    require_once(__DIR__ . "/../services/loader.php");
    require_once(__DIR__ . "/../components/header.php")
    ?>
    <main class="p-6 flex flex-col gap-3">

        <h1 class="text-3xl font-bold text-center">Configuración</h1>

        <section class=" md:col-span-2  border border-red-600 dark:border-fuchsia-700 py-3">

            <h2 class="text-xl font-bold text-center">
                Configuración de usuario
            </h2>

            <article class="p-10">

                <label>Cambiar foto de perfil
                    <input type="file" class=" bg-red-700 text-neutral-200 dark:bg-neutral-700 file-input file-input-bordered w-full max-w-xs" />
                </label>

            </article>

            <article class="p-10">
                <h11>Configuración de contraseñas:</h11>
                <button class="btn bg-red-700 dark:bg-neutral-900" onclick="my_modal_1.showModal()">cambiar</button>
                <dialog id="my_modal_1" class="modal">
                    <div class="modal-box flex flex-col border border-gray-300 p-2 rounded-md mb-4 text-red-700 bg-neutral-50 dark:text-neutral-100 dark:bg-neutral-900 gap-5">
                        <h3 class="font-bold text-lg">Cambiar contraseña</h3>
                        <label class="py-4">contraseña actual:
                            <input class="bg-neutral-200 dark:bg-black" type="password" name="new" required>
                        </label>
                        <label>Nueva contraseña:
                            <input class="bg-neutral-200 dark:bg-black" type="password" name="nueva_passwd" required>
                        </label>
                        <label>Repetir la contraseña nueva:
                            <input class="bg-neutral-200 dark:bg-black" type="password" name="nueva_contraseña" required>
                        </label>
                        <button type="submit" class="btn btn-outline btn-error dark:btn-secondary">Cambiar contraseña
                        </button>
                        </>
                        <div class="modal-action">
                            <form method="dialog">

                                <button type="submit" class="btn btn-outline btn-error dark:btn-secondary">Close</button>
                            </form>
                        </div>
                    </div>
                </dialog>
            </article>

            <article class="p-10">
                <h11>Cambiar nombre de usuario</h11>
                <button class="btn bg-red-700 dark:bg-neutral-900" onclick="my_modal_2.showModal()">cambiar</button>
                <dialog id="my_modal_2" class="modal">
                    <div class="modal-box flex flex-col border border-gray-300 p-2 rounded-md mb-4 text-red-700 bg-neutral-50 dark:text-neutral-100 dark:bg-neutral-900 gap-5">
                        <h3 class="font-bold text-lg">Cambiar nombre de usuario</h3>

                        <label>Nuevo usuario:
                            <input class="bg-neutral-200 dark:bg-black" type="password" name="nueva_contraseña" required>
                        </label>
                        <button type="submit" class="btn btn-outline btn-error dark:btn-secondary">Cambiar usuario</button></button>
                        <div class="modal-action">
                            <form method="dialog">

                                <button type="submit" class="btn btn-outline  btn-error dark:btn-secondary">Close</button>
                            </form>
                        </div>
                    </div>
                </dialog>
            </article>

            <article class="w-full text-center">
                <a href="/src/services/logout.php" class=" btn btn-outline  btn-error dark:btn-secondary "> Logout</a>
            </article>
        </section>
    </main>
</body>

</html>