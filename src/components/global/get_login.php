<?php
require_once __DIR__ . "/../../services/components_renderer.php";
require_once __DIR__ . "/../../src_route.php";
?>


<?php if (isset($_SESSION["usuario"])) : ?>

    <div class="dropdown dropdown-hover dropdown-bottom dropdown-end">
        <button tabindex="0">
            <img src="<?= $_SESSION["image"] ?>" alt="usuario" class="w-20">
        </button>

        <ul class="p-2 shadow menu dropdown-content   rounded-box w-fit z-[1] bg-red-800 dark:bg-purple-800"
            tabindex="0">
            <li><?= $_SESSION["usuario"] ?></li>
            <hr class="w-2/3 text-center">
            <li><a href="<?= SRC_ROUTE ?>/pages/user/settings.php" id="setting">Settings</a></li>
            <li><a href="<?= SRC_ROUTE ?>/services/user/logout.php" id="logout">Logout</a></li>
            <?php render_component("global/dark_mode_selector"); ?>
        </ul>
    </div>

<?php else : ?>

    <div class="dropdown dropdown-hover dropdown-bottom dropdown-end">
        <button tabindex="0">User</button>

        <ul class="p-2 shadow menu dropdown-content rounded-box w-fit z-[1] bg-red-800 dark:bg-purple-800" tabindex="0">
            <li><a href="<?= SRC_ROUTE ?>/pages/user/login.php" id="login">Login</a></li>
            <li><a href="<?= SRC_ROUTE ?>/pages/user/register.php" id="signup">Signup</a></li>
            <?php render_component("global/dark_mode_selector"); ?>
        </ul>
    </div>

<?php endif;
