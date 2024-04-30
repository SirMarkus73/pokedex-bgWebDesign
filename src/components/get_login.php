<?php

if (isset($_SESSION["usuario"])) : ?>

    <p><?= $_SESSION["usuario"] ?></p>
    <p class="text-red-500 dark:text-purple-500">|</p>
    <a href="../services/logout.php" id="logout">Cerrar sesión</a>


<?php else : ?>

    <a href="../pages/login.php" id="login">Login</a>
    <p class="text-red-500 dark:text-purple-500">|</p>
    <a href="../pages/register.php" id="signup">Signup</a>

<?php endif;
