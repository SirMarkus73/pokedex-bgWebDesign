<?php require_once __DIR__ . "/../../src_route.php"; ?>

<article>

    <button class="btn bg-red-700 dark:bg-neutral-900 text-white hover:text-black hover:bg-white w-2/6" onclick="my_modal_2.showModal()">Cambiar nombre de usuario</button>
    <dialog id="my_modal_2" class="modal">
        <div class="modal-box flex flex-col border border-gray-300 p-2 rounded-md mb-4 text-red-700 bg-neutral-50 dark:text-neutral-100 dark:bg-neutral-900 gap-5">
            <h3 class="font-bold text-lg">Cambiar nombre de usuario</h3>

            <form action="<?= SRC_ROUTE ?>/services/user/settings/change_username.php" method="post">
                <label>
                    Nuevo usuario:
                    <input class="bg-neutral-200 dark:bg-black" type="text" name="new-username" required>
                </label>
                <input type="hidden" name="username" value="<?= $_SESSION[
                    "usuario"
                ] ?>">
                <button type="submit" class="btn btn-outline btn-error dark:btn-secondary">Cambiar usuario</button>
            </form>

            <div class="modal-action">
                <form method="dialog">

                    <button type="submit" class="btn btn-outline  btn-error dark:btn-secondary">Close</button>
                </form>
            </div>
        </div>
    </dialog>
</article>