<?php
session_start();


if (isset($_SESSION["usuario"])) : ?>
    <p><?= $_SESSION["usuario"] ?></p>
    <a href="../services/logout.php" id="logout">Cerrar sesión</a>

<?php else : ?>
    <a href="../pages/login.php" id="login">Login/Signup</a>
<?php endif;
