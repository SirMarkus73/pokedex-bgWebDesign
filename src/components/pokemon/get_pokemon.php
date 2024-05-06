<?php
require_once (__DIR__ . "/../../services/methods.php");

$name = strtolower(get("name", ""));
$api_url = "https://pokeapi.co/api/v2/pokemon/$name";

$result = file_get_contents($api_url);

$pokemon = json_decode($result, true);

if ($pokemon):
    $pokemon_name = $pokemon['name'];
    $image_url = $pokemon['sprites']['front_default'];
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
                        <?= $ability['ability']['name'] ?>
                    </div>
                <?php }
                ; ?>
            </div>

            <div class="stats bg-red-500 dark:bg-fuchsia-500 text-white">
                <?php foreach ($stats as $stat) { ?>
                    <div class="stat h-fit  bg-red-500 dark:bg-fuchsia-500 text-white">
                        <div class="stat-title"><?= $stat['stat']['name'] ?></div>
                        <div class="stat-value"><?= $stat['base_stat'] ?></div>
                    </div>
                <?php }
                ; ?>

            </div>



            <div class="card-actions justify-end text-black">
                <?php foreach ($types as $type) { ?>
                    <?php
                    $type_name = $type['type']['name'];
                    $type_color = "bg-$type_name";
                    ?>

                    <div class="badge text-white <?= $type_color ?>"><?= $type_name ?></div>
                <?php }
                ; ?>
            </div>
        </div>
    </article>

<?php else:

    header("Location: ../pages/error.php?title=Pokemon no encontrado&message=El pokemon solicitado no existe&href=../pages/wiki.php");

    ?>

    <script>
        window.location.href = '../pages/error.php?title=Pokemon no encontrado&message=El pokemon solicitado no existe&href=../pages/wiki.php';
    </script>

    <?php
    exit();
endif;
