<?php require_once __DIR__ . "/../../services/src_route.php"; ?>

<article>

    <button class="btn bg-red-700 dark:bg-neutral-900 text-white hover:text-black hover:bg-white w-2/6"
            onclick="changePassword.showModal()">Cambiar contraseña
    </button>
    <dialog id="changePassword" class="modal">
        <div class="modal-box flex flex-col border border-gray-300 p-2 rounded-md mb-4 text-red-700 bg-neutral-50 dark:text-neutral-100 dark:bg-neutral-900 gap-5">
            <h3 class="font-bold text-lg">Cambiar contraseña</h3>


            <form action="<?= SRC_ROUTE . "/services/user/settings/change_password.php" ?>" method="post"
                  class="flex flex-col gap-3">

                <label>
                    contraseña actual:
                    <input class="input input-bordered text-black bg-neutral-200 dark:bg-black dark:text-neutral-100"
                           type="password" name="password" required>
                </label>

                <label>
                    Nueva contraseña:
                    <input class="input input-bordered text-black bg-neutral-200 dark:bg-black dark:text-neutral-100"
                           type="password" name="new_password" required>
                </label>

                <label>
                    Repetir la contraseña nueva:
                    <input class="input input-bordered text-black bg-neutral-200 dark:bg-black dark:text-neutral-100"
                           type="password" name="password_repeat" required>
                </label>

                <input type="hidden" name="username" value="<?= $_SESSION["usuario"] ?>">

                <button type="submit" class="btn btn-outline btn-error dark:btn-secondary">
                    Cambiar contraseña
                </button>
            </form>

            <div class="modal-action">
                <form method="dialog">

                    <button type="submit" class="btn btn-outline btn-error dark:btn-secondary">Close</button>
                </form>
            </div>
        </div>
    </dialog>
</article>