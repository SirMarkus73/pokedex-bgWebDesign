<?php require_once __DIR__ . "/../../src_route.php"; ?>


<section class="max-md:hidden">
    <img src="<?= SRC_ROUTE ?>/assets/img/logo.webp" alt="Logo de PokeFull" class="w-64 xl:w-96"></a>
</section>

<section class="md:col-span-2 border border-red-600 dark:border-fuchsia-700 p-10 w-max h-max">
    <form action="<?= SRC_ROUTE ?>/services/user/login.php" method="post" class="w-max flex flex-col gap-4 form-control">
        <legend class="text-2xl">Iniciar sesión</legend>

        <label for="username">Usuario:
            <input type="text" id="username" name="username" placeholder="Ingresa tu usuario" required autocomplete="username" class="dark:bg-neutral-900 input input-bordered">
        </label>

        <label for="password">Contraseña:
            <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required autocomplete="current-password" class="dark:bg-neutral-900 input input-bordered">
        </label>

        <button type="submit" class="btn btn-outline btn-error dark:btn-secondary">Inicio de sesión </button>
    </form>

    <hr class="border border-black dark:border-stone-50  w-1/2 my-5">

    <a href="<?= SRC_ROUTE ?>/pages/user/register.php">Crear Cuenta</a>
</section>