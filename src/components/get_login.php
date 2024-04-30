<?php
session_start();


if (isset($_SESSION["usuario"])) : ?>
    <div class="flex justify-between gap-3 flex-row bg-red-800 border-red-700 dark:bg-purple-800 dark:border-purple-800 divide-x-2 p-1">
        <p><?= $_SESSION["usuario"] ?></p>
        <a href="../services/logout.php" id="logout">Cerrar sesión</a>
    </div>

<?php else : ?>
    <a href="../pages/login.php" id="login">Login/Signup</a>
<?php endif;
