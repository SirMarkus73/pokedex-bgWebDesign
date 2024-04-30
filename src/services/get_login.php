<?php
session_start();


if (isset($_SESSION["usuario"])) : ?>
    <p><?= $_SESSION["usuario"] ?></p>

<?php else : ?>
    <a href="../pages/login.php" id="login">Login/Signup</a>
<?php endif;
