<header class="flex items-center p-4 flex-col md:flex-row md:justify-between bg-red-600 text-white dark:bg-purple-950">
    <a href="./index.php"><img src="../assets/img/logo.webp" alt="Logo de PokeFull" class="w-24"></a>
    <nav class="flex gap-3 flex-row p-2">
        <div class="flex flex-row justify-between p-3 gap-3 bg-red-800 dark:bg-purple-800">
            <a href="../pages/index.php" id="home">Home</a>
            <p class="text-red-500 dark:text-purple-500">|</p>
            <a href="../pages/wiki.php" id="wiki">Wiki</a>
            <p class="text-red-500 dark:text-purple-500">|</p>
            <?php require_once(__DIR__ . "/get_login.php") ?>
        </div>
        <a href="#" id="toggle-dark-mode" class="hidden"><img src="" alt="Selector de dark mode" class="w-10"></a>
        <audio src="../assets/music/pokemon_capture2.mp3" hidden></audio>
    </nav>

</header>

<script src="../services/darkMode.js"></script>