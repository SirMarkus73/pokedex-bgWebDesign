<?php require_once("../services/imports.php") ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php require("../components/header.php") ?>
    <div class="form-control" class="row-span-7">

        <p>Dark Mode <input type="checkbox" class="toggle [--tglbg:fuchsia] bg-neutral-800 hover:bg-fuchsia-600 border-neutral-800" id="toggle-dark-mode" checked />
        </p>
    </div>

    </form>
</body>

</html>

<script src="../services/darkMode.js"></script>