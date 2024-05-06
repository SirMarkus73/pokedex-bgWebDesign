<?php
if (!isset($_SESSION["usuario"])) :
    header("Location: ../pages/index.php");
    exit();
endif;
