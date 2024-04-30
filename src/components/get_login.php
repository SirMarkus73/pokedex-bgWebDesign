<?php
session_start();


if (isset($_SESSION["usuario"])) : ?>
    <div class="flex justify-between gap-3 flex-row bg-red-800 dark:bg-purple-800 p-2">
        <p><?= $_SESSION["usuario"] ?></p>
        <p class="text-red-500 dark:text-purple-500">|</p>
        <a href="../services/logout.php" id="logout">Cerrar sesión</a>
    </div>

<?php else : ?>
    <div class="flex justify-between gap-3 flex-row bg-red-800 dark:bg-purple-800 p-2">
        <a href="../pages/login.php" id="login">Login</a>
        <p class="text-red-500 dark:text-purple-500">|</p>
        <a href="../pages/register.php" id="signup">Signup</a>
    </div>
<?php endif;
