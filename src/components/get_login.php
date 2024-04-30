<?php
session_start();


if (isset($_SESSION["usuario"])) : ?>
    <div class="flex gap-1 bg-red-800 border-red-700 dark:bg-purple-80 dark:border-purple-700 divide-x p-1">
        <p><?= $_SESSION["usuario"] ?></p>
        <a href="../services/logout.php" id="logout">Cerrar sesión</a>
    </div>

<?php else : ?>
    <a href="../pages/login.php" id="login">Login/Signup</a>
<?php endif;
