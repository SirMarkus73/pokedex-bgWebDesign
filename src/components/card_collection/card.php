<?php
foreach ($cards as $card) {
    if ($card["id"] == $id) {
        $card_selected = $card;
    }
}

?>

<?php if (isset($card_selected)) : ?>

    <section class=" mb-0 m-10 w-3/4 mx-auto border border-red-500 dark:border-fuchsia-500 rounded-lg flex flex-col justify-center p-3 gap-3">
        <a href="<?= $card_selected["img"] ?>" target="_blank">
            <img src="<?= $card_selected["img"] ?>" alt="Pokemon <?= $card_selected["name"] ?>" class="w-1/3 mx-auto border-4 border-red-500 dark:border-fuchsia-500 rounded-3xl">
        </a>

        <form action="<?= SRC_ROUTE ?>/services/cards/insertar_cards.php" method="get">
            <button class="mx-auto flex flex-col justify-center p-1 gap-1 w-2/3 btn btn-outline btn-ghost dark:btn-secondary btn-error">Añadir a mi colección</button>
            <input type="hidden" name="id" value="<?= $card_selected["id"] ?>">
            <input type="hidden" name="username" value="<?= $_SESSION["usuario"] ?>">
        </form>
    </section>

<?php endif; ?>


