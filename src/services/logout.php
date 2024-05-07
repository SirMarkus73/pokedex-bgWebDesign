<?php
require_once(__DIR__ . "/../src_route.php");
session_start();
require_once(__DIR__ . "/../services/protected_page.php");
session_unset();

session_destroy();

header("Location: " . SRC_ROUTE . "/pages/index.php");
exit();
