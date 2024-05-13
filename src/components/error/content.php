<?php
require_once __DIR__ . "/../../services/methods.php";

$message = get("message", "ERROR");
$href = get("href", "index.php");
?>

<random class="text-error "></random>
<h1 class="text-error text-center text-3xl "><?= $title ?></h1>
<p class="text-error text-center text-2xl"><?= $message ?></p>

<a href="<?= $href ?>" class="text-error text-center text-lg btn btn-error btn-ghost btn-outline">Volver a
    intentarlo</a>
<random class="text-error"></random>

<script>
    var sleep = function (ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    };

    async function randomChars(element) {

        while (true) {
            const random = Math.random().toString(36).substring(2, 30);
            element.innerHTML = random;
            await sleep(50);
        }
    }

    document.querySelectorAll("random").forEach(element => {
        randomChars(element);
    })
</script>