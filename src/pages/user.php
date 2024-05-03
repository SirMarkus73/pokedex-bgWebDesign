<?php require_once (__DIR__ . "/../services/imports.php") ?>

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
    require_once (__DIR__ . "/../services/loader.php");
    require_once (__DIR__ . "/../components/header.php")
        ?>
    <main class="p-6 flex flex-col gap-3">

        <h1 class="text-3xl font-bold text-center">Configuración</h1>

        <?php if (isset($_SESSION["usuario"])): ?>

            <section class="border border-red-600 dark:border-fuchsia-700 py-3">

                <h2 class="text-xl font-bold text-center">
                    Configuración de usuario
                </h2>

                <article class="p-10">

                    <label>Cambiar foto de perfil
                        <input type="file" class="file-input file-input-bordered w-full max-w-xs" />
                    </label>

                </article>

                <article class="p-10">
                    <h11>Configuración de contraseñas:</h11>
                    <button class="btn" onclick="my_modal_1.showModal()">cambiar</button>
                    <dialog id="my_modal_1" class="modal">
                        <div class="modal-box flex flex-col">
                            <h3 class="font-bold text-lg">Cambiar contraseña</h3>
                            <label class="py-4">contraseña actual:
                                <input type="password" name="new"
                                    style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; margin-bottom: 10px;"
                                    required>
                            </label>
                            <label>Nueva contraseña:
                                <input type="password" name="nueva_passwd"
                                    style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; margin-bottom: 10px;"
                                    required>
                            </label>
                            <label>Repetir la contraseña nueva:
                                <input type="password" name="nueva_contraseña"
                                    style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; margin-bottom: 10px;"
                                    required>
                            </label>
                            <button type="submit" class="btn btn-outline btn-error dark:btn-secondary">Cambiar contraseña
                            </button>
                            </>
                            <div class="modal-action">
                                <form method="dialog">

                                    <button class="btn">Close</button>
                                </form>
                            </div>
                        </div>
                    </dialog>
                </article>

                <article class="p-10">
                    <h11>Cambiar nombre de usuario</h11>
                    <button class="btn" onclick="my_modal_2.showModal()">cambiar</button>
                    <dialog id="my_modal_2" class="modal">
                        <div class="modal-box flex flex-col">
                            <h3 class="font-bold text-lg">Cambiar nombre de usuario</h3>

                            <label>Nuevo usuario:
                                <input type="password" name="nueva_contraseña"
                                    style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; margin-bottom: 10px;"
                                    required>
                            </label>
                            <button type="submit" class="btn btn-outline btn-error dark:btn-secondary">Cambiar contraseña
                            </button>
                            </>
                            <div class="modal-action">
                                <form method="dialog">

                                    <button class="btn">Close</button>
                                </form>
                            </div>
                        </div>
                    </dialog>
                </article>

                <article class="w-full text-center">
                    <a href="/src/services/logout.php" class="btn w-2/3"> Logout</a>
                </article>
            </section>
        <?php endif; ?>

        <article class="border border-red-600 dark:border-fuchsia-700 py-3">

            <h2 class="text-xl font-bold text-center">Configuración la pagina</h2>

            <section class="flex flex-row p-10">
                <p> Light Mode </p>
                <input type="checkbox"
                    class="toggle dark:[--tglbg:fuchsia] dark:bg-neutral-200 dark:hover:bg-fuchsia-600 dark:border-neutral-800"
                    style="color: white" id="toggle-dark-mode" />
                <p> Dark Mode</p>
            </section>
        </article>



    </main>
</body>

</html>