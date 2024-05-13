<?php
require_once __DIR__ . "/../src_route.php";
if (!isset($_SESSION["usuario"])) :
    header("Location: " . SRC_ROUTE . " /pages/user/login.php");
    exit();
endif;
