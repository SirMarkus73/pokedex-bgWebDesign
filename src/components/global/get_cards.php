<?php
require_once __DIR__ . "/../../services/components_renderer.php";
require_once __DIR__ . "/../../src_route.php";
?>


<?php if (isset($_SESSION["usuario"])) : ?>

    <div class="dropdown dropdown-hover dropdown-bottom dropdown-end w-max">
        <button tabindex="0">
            Cards
        </button>

        <ul class="p-2 shadow menu dropdown-content rounded-box w-fit z-[1] bg-red-800 dark:bg-purple-800"
            tabindex="0">
            <li><?= $_SESSION["usuario"] ?></li>
            <hr class="w-2/3 text-center">
            <li><a href="<?= SRC_ROUTE ?>/pages/cards/index.php" id="setting">Todas las cartas</a></li>
            <li><a href="<?= SRC_ROUTE ?>/pages/cards/collection.php" id="logout">Mi colección</a></li>
        </ul>
    </div>

<?php else : ?>

    <a href="<?= SRC_ROUTE ?>/pages/cards/index.php">Cards</a>

<?php endif;
