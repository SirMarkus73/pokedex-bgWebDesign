<?php
require_once __DIR__ . "/../../src_route.php";
require_once __DIR__ . "/../../services/pokemons/get_pokemons.php"
?>

<article>

    <button class="btn bg-red-700 dark:bg-neutral-900 text-white hover:text-black hover:bg-white w-2/6"
            onclick="my_modal_1.showModal()">Cambiar Imagen
    </button>
    <dialog id="my_modal_1" class="modal">
        <div class="modal-box flex flex-col border border-gray-300 p-2 rounded-md mb-4 text-red-700 bg-neutral-50 dark:text-neutral-100 dark:bg-neutral-900 gap-5">
            <h3 class="font-bold text-lg">Cambiar imagen de perfil</h3>
            <form action="<?= SRC_ROUTE ?>/services/user/settings/change_image.php" method="post">
                <input type="hidden" name="username" value="<?= $_SESSION["usuario"] ?>">
                <?php render_component("pokemon/searchbar", [
                    "label" => "Seleccionar avatar",
                    "pokemons" => $pokemons,
                ]); ?>
            </form>
            <div class="modal-action">
                <form method="dialog">

                    <button type="submit" class="btn btn-outline btn-error dark:btn-secondary">Close</button>
                </form>
            </div>
        </div>
    </dialog>
</article>