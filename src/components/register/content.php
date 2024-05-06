<section class="max-md:hidden">
    <img src="../assets/img/logo.webp" alt="Logo de PokeFull" class="w-96"></a>
</section>
<section class="md:col-span-2 border border-red-600 dark:border-fuchsia-700 p-10">

    <form action="../services/register.php" method="post" class="w-max flex flex-col gap-4">
        <legend class="text-2xl">Registrarse</legend>

        <label for="username">Usuario:
            <input type="text" id="username" name="username" placeholder="Ingresa tu usuario" required autocomplete="username" class="dark:bg-neutral-900 input input-bordered" maxlength="20">
        </label>

        <label for="password">Contraseña:
            <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required autocomplete="new-password" class="dark:bg-neutral-900 input input-bordered">
        </label>

        <label for="password-repeat">Repetir contraseña:
            <input type="password" id="password-repeat" name="password-repeat" placeholder="Ingresa tu contraseña" required autocomplete="new-password" class="dark:bg-neutral-900 input input-bordered">
        </label>

        <button type="submit" class="btn btn-outline btn-error dark:btn-secondary">Registrarse</button>

    </form>

    <hr class="border border-black dark:border-stone-50  w-1/2 my-5">

    <a href="login.php">Iniciar Sesión</a>
</section>