<?php if (isset($_SESSION["usuario"])) : ?>

    <div class="dropdown">
        <span class="relative flex h-3 w-3">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3 w-3 bg-sky-500">Prueba</span>
        </span>

        <ul class="p-2 shadow menu dropdown-content bg-slate-700 rounded-box w-fit z-[1]" tabindex="0">
            <li><a href="../pages/user.php" id="setting">Settings</a></li>
            <li><a href="../services/logout.php" id="logout">Logout</a></li>
        </ul>
    </div>

<?php else : ?>

    <div class="dropdown">
        <button tabindex="0">User</button>

        <ul class="p-2 shadow menu dropdown-content bg-slate-700 rounded-box w-fit z-[1]" tabindex="0">
            <li><a href="../pages/login.php" id="login">Login</a></li>
            <li><a href="../pages/register.php" id="signup">Signup</a></li>
        </ul>
    </div>

<?php endif;
