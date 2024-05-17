<?php


require_once __DIR__ . "/../../services/src_route.php";
require_once __DIR__ . "/../../services/protected_page.php";
require_once __DIR__ . "/../cookies/methods.php";

kill_cookies();
header("Location: " . SRC_ROUTE . "/pages/index.php");
exit();
