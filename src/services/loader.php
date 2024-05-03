<script>
    async function loader() {
        window.addEventListener("beforeunload", () => {
            const loader = document.getElementById("loader");
            loader.classList.add("absolute");
            loader.classList.remove("hidden");

        })

        window.addEventListener("load", () => {
            const loader = document.getElementById("loader");
            loader.classList.add("hidden");
            loader.classList.remove("absolute");
        })
    }

    loader();
</script>

<link rel="stylesheet" href="../css/style.css">

<div id="loader" class="absolute w-screen h-screen top-0 left-0 z-10">
    <div class="w-full flex h-screen justify-center items-center bg-white dark:bg-neutral-800">

        <span class="loading loading-infinity loading-lg text-red-600 dark:text-fuchsia-700"></span>
        <p class="text-red-600 dark:text-fuchsia-700 text-2xl">Loading...</p>
    </div>
</div>