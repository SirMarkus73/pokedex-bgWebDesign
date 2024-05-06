<?php
if (!isset($_SESSION["usuario"])) :
    header("Location: ../pages/index.php");
endif;
