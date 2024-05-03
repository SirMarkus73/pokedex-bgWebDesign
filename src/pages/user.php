<?php require_once("../services/imports.php") ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="text-black bg-slate-200 dark:bg-neutral-800 dark:text-white" id="settings">
    <?php require("../components/header.php") ?>
    <div class="form-control" class="row-span-7">

        <p>Dark Mode <input type="checkbox" class="toggle dark:[--tglbg:fuchsia] dark:bg-neutral-200 dark:hover:bg-fuchsia-600 dark:border-neutral-800" style="color: white" id="toggle-dark-mode" checked />
        </p>
    </div>

    </form>
</body>

</html>