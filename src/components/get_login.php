<?php

if (isset($_SESSION["usuario"])) : ?>

    <details class="dropdown">
        <summary>User</summary>

        <ul class="p-2 shadow menu dropdown-content bg-slate-700 rounded-box w-fit">
            <li><a href="../pages/user.php" id="setting">Settings</a></li>
            <li><a href="../services/logout.php" id="logout">Logout</a></li>
        </ul>
    </details>

    <p><?= $_SESSION["usuario"] ?></p>
    <p class="text-red-500 dark:text-purple-500">|</p>
    <a href="../services/logout.php" id="logout">Cerrar sesión</a>


<?php else : ?>

    <details class="dropdown">
        <summary>User</summary>

        <ul class="p-2 shadow menu dropdown-content bg-slate-700 rounded-box w-fit">
            <li><a href="../pages/login.php" id="login">Login</a></li>
            <li><a href="../pages/register.php" id="signup">Signup</a></li>
        </ul>
    </details>

<?php endif;
