<?php
session_start();


if (isset($_SESSION["usuario"])) : ?>
    <div class="flex gap-1 bg-red-800 dark:bg-purple-800">
        <p><?= $_SESSION["usuario"] ?></p>
        <a href="../services/logout.php" id="logout">Cerrar sesión</a>
    </div>

<?php else : ?>
    <a href="../pages/login.php" id="login">Login/Signup</a>
<?php endif;
