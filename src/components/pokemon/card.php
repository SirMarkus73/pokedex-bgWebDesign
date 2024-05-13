<!-- 
/* Type colors: 
    bg-steel: "#404040",
    bg-water: "#3b82f6",
    bg-bug: "#84cc16",
    bg-dragon: "#6366f1",
    bg-electric: "#eab308",
    bg-ghost: "#8b5cf6",
    bg-fire: "#f97316",
    bg-fairy: "#ec4899",
    bg-ice: "#06b6d4",
    bg-fighting: "#dc2626",
    bg-normal: "#737373",
    bg-grass: "#22c55e",
    bg-psychic: "#db2777",
    bg-rock: "#a16207",
    bg-dark: "#64748b",
    bg-ground: "#f59e0b",
    bg-poison: "#d946ef",
    bg-flying: "#a855f7", */

 -->

<article class="card <?= $width ?> min-w-64 shadow-xl bg-red-600 dark:bg-fuchsia-600 text-white m-0">
    <figure class="p-3"><img src="<?= $image ?>" alt="pokemon <?= $name ?>" class="<?= $height ?>" /></figure>
    <div class="card-body px-5 pb-5 pt-0">
        <div class="flex flex-row gap-3 items-center">
            <h2 class="card-title"> <?= $name ?> </h2>

            <div class="mx-1 flex flex-row gap-3">
                <?php if (gettype($abilities) == "array") {
                    foreach ($abilities as $ability) : ?>
                        <div class="badge bg-white dark:bg-fuchsia-500 text-black dark:text-white ">
                            <?= $ability ?>
                        </div>
                    <?php endforeach;
                } else {
                    ?>
                    <div class="badge bg-white dark:bg-fuchsia-500 text-black dark:text-white ">
                        <?= $abilities ?>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

        <div class="stats bg-red-500 dark:bg-fuchsia-500 text-white">
            <?php

            if (gettype($stats) == "array") {
                foreach ($stats as $stat) : ?>
                    <div class="stat h-fit  bg-red-500 dark:bg-fuchsia-500 text-white">
                        <div class="stat-title"><?= $stat["name"] ?></div>
                        <div class="stat-value"><?= $stat["base"] ?></div>
                    </div>
                <?php endforeach;
            } else {
                ?>
                <div class="stat h-fit  bg-red-500 dark:bg-fuchsia-500 text-white">
                    <div class="stat-title"><?= $stats["name"] ?></div>
                    <div class="stat-value"><?= $stats["base"] ?></div>
                </div>
            <?php
            }
            ?>

        </div>



        <div class="card-actions justify-end text-black">
            <?php foreach ($types as $type) { ?>
                <?php
                $type_color = "bg-$type";
                ?>

                <div class="badge text-white <?= $type_color ?>"><?= $type ?></div>
            <?php } ?>
        </div>
    </div>
</article>