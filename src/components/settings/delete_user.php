<?php require_once __DIR__ . "/../../services/src_route.php"; ?>

<article>

    <button class="btn bg-red-700 text-white hover:text-black hover:bg-red-800 w-2/6" onclick="my_modal_4.showModal()">
        Eliminar Usuario
    </button>
    <dialog id="my_modal_4" class="modal">
        <div class="modal-box flex flex-col border border-gray-300 p-2 rounded-md mb-4 text-red-700 bg-neutral-50 dark:text-neutral-100 dark:bg-neutral-900 gap-5">
            <h3 class="font-bold text-lg">Eliminar usuario</h3>

            <form action="<?= SRC_ROUTE . "/services/user/settings/delete_user.php" ?>" method="post"
                  class="flex flex-col gap-5 justify-center">
                <label>
                    Confirma tu usuario:
                    <input class="input input-bordered text-black bg-neutral-200 dark:bg-black dark:text-neutral-100"
                           type="text" name="current-username" required>
                </label>
                <input type="hidden" name="username" value="<?= $_SESSION["usuario"] ?>">
                <button type="submit" class="btn btn-outline btn-error w-1/3 text-center mx-auto">Eliminar</button>
            </form>

            <div class="modal-action">
                <form method="dialog">

                    <button type="submit" class="btn btn-outline  btn-error dark:btn-secondary">Close</button>
                </form>
            </div>
        </div>
    </dialog>
</article>