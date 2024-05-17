<?php


require_once __DIR__ . "/../../services/src_route.php";
require_once __DIR__ . "/../cookies/kill_cookies.php";

header("Location: " . SRC_ROUTE . "/pages/index.php");
exit();
