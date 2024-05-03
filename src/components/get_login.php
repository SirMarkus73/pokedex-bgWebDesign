<?php if (isset($_SESSION["usuario"])) : ?>

<div class="dropdown dropdown-hover dropdown-bottom dropdown-end">
    <button tabindex="0"><?= $_SESSION["usuario"] ?></button>

    <ul class="p-2 shadow menu dropdown-content   rounded-box w-fit z-[1] bg-red-800 dark:bg-purple-800" tabindex="0">
        <li><a href="../pages/user.php" id="setting">Settings</a></li>
        <li><a href="../services/logout.php" id="logout">Logout</a></li>
    </ul>
</div>

<?php else : ?>

<div class="dropdown dropdown-hover dropdown-bottom dropdown-end">
    <button tabindex="0">User</button>

    <ul class="p-2 shadow menu dropdown-content  rounded-box w-fit z-[1] bg-red-800 dark:bg-purple-800" tabindex="0">
        <li><a href="../pages/login.php" id="login">Login</a></li>
        <li><a href="../pages/register.php" id="signup">Signup</a></li>
        <li><a href="../pages/user.php" id="setting">Settings</a></li>
    </ul>
</div>

<?php endif;