<header class="flex items-center p-4 flex-col md:flex-row md:justify-between bg-red-600 text-white dark:bg-blue-950">
    <h3 class="text-3xl">PokeFull</h3>
    <nav class="flex gap-9">
        <a href="./index.php">Home</a>
        <a href="/login">Login</a>

        <form action="." method="get">
            <input type="hidden" name="dark" value="dark">
            <input type="submit" value="Dark Mode">
        </form>
        <form action="." method="get">
            <input type="hidden" name="dark" value="">
            <input type="submit" value="Light Mode">
        </form>
    </nav>
</header>