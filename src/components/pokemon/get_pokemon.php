<?php
require_once __DIR__ . "/../../services/methods.php";

$name = strtolower(get("name", ""));

foreach ($pokemons as $i) {
    if ($i["name"] == $name) {
        $pokemon = $i;
        break;
    } else {
        $pokemon = null;
    }
}



if (isset($pokemon)) :

    $pokemon_name = $pokemon["name"];
    $image_url = $pokemon["image"];
    $abilities = $pokemon["abilities"];
    $stats = $pokemon["stats"];
    $types = $pokemon["types"];
?>
    <article class="card w-3/4 shadow-xl bg-red-600 dark:bg-fuchsia-600 text-white">
        <figure><img src="<?= $image_url ?>" alt="pokemon <?= $name ?>" class="w-2/5 md:w-2/6 lg:w-2/12" /></figure>
        <div class="card-body">
            <h2 class="card-title"> <?= $name ?> </h2>

            <div>
                <?php foreach ($abilities as $ability) { ?>
                    <div class="badge bg-white dark:bg-fuchsia-500 text-black dark:text-white ">
                        <?= $ability ?>
                    </div>
                <?php } ?>
            </div>

            <div class="stats bg-red-500 dark:bg-fuchsia-500 text-white">
                <?php foreach ($stats as $stat) { ?>
                    <div class="stat h-fit  bg-red-500 dark:bg-fuchsia-500 text-white">
                        <div class="stat-title"><?= $stat["name"] ?></div>
                        <div class="stat-value"><?= $stat["base"] ?></div>
                    </div>
                <?php } ?>

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

<?php
else :
    header(
        "Location: ../pages/error.php?title=Pokemon no encontrado&message=El pokemon solicitado no existe&href=../pages/wiki.php"
    ); ?>

    <script>
        window.location.href = '../pages/error.php?title=Pokemon no encontrado&message=El pokemon solicitado no existe&href=../pages/wiki.php';
    </script>

<?php exit();
endif;
