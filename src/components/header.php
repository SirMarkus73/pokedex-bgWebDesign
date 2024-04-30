<?php
require_once("../services/get_login.php")
?>

<header class="flex items-center p-4 flex-col md:flex-row md:justify-between bg-red-600 text-white dark:bg-purple-950">
        <a href="./index.php"><img src="../assets/img/logo.webp" alt="Logo de PokeFull" class="w-24"></a>
        <p class="text-xl"><?php saludar() ?></p>
        <nav class="flex gap-9 items-center">
                <a href="../pages/index.php" id="home">Home</a>
                <a href="../pages/wiki.php" id="wiki">Wiki</a>
                <a href="../pages/login.php" id="login">Login/Signup</a>

                <a href="#" id="toggle-dark-mode" class="hidden"><img src="" alt="Selector de dark mode" class="w-10"></a>
                <audio src="../assets/music/pokemon_capture2.mp3" hidden></audio>
        </nav>
</header>

<script src="../services/darkMode.js"></script>