<div id="loader" class="absolute w-screen h-screen top-0 left-0 z-10 m-0">
    <div class="w-full flex h-screen justify-center items-center bg-white dark:bg-neutral-800">

        <span class="loading loading-infinity loading-lg text-red-600 dark:text-fuchsia-700"></span>
        <p class="text-red-600 dark:text-fuchsia-700 text-2xl">Loading...</p>
    </div>
</div>

<script>
    window.addEventListener("beforeunload", () => {
        window.scrollTo({
            top: 0,
        });
        const body = document.querySelector("body");
        const loader = document.getElementById("loader");
        const main = document.querySelector("main");

        loader.classList.remove("hidden");
        loader.classList.add("absolute");

        body.classList.add("overflow-hidden");
        main.classList.add("hidden");
    })

    window.addEventListener("load", () => {
        const body = document.querySelector("body");
        const loader = document.getElementById("loader");
        const main = document.querySelector("main");

        loader.classList.add("hidden");
        loader.classList.remove("absolute");

        body.classList.remove("overflow-hidden");
        main.classList.remove("hidden");
    })
</script>