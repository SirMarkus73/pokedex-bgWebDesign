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