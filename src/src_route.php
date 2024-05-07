<?php
require_once(__DIR__ . "/services/env.php");

if ($_ENV["DEPLOY"] == "YES") {
    define("SRC_ROUTE", $_ENV["DEPLOY_URL"]);
} else {
    define("SRC_ROUTE", substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT'])));
}
