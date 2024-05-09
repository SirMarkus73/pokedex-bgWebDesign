<div id="loader" class="absolute w-screen h-screen top-0 left-0 z-10">
    <div class="w-full flex h-screen justify-center items-center bg-white dark:bg-neutral-800">

        <span class="loading loading-infinity loading-lg text-red-600 dark:text-fuchsia-700"></span>
        <p class="text-red-600 dark:text-fuchsia-700 text-2xl">Loading...</p>
    </div>
</div>

<script>
    window.addEventListener("beforeunload", () => {
        const loader = document.getElementById("loader");
        const main = document.querySelector("main")
        loader.classList.remove("hidden");
        loader.classList.add("absolute");

        main.hidden = true;
    })

    window.addEventListener("load", () => {
        const loader = document.getElementById("loader");
        loader.classList.add("hidden");
        loader.classList.remove("absolute");
    })
</script>