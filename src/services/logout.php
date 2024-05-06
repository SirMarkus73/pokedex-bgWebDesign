<?php

session_start();
require_once (__DIR__ . "/../services/protected_page.php");
session_unset();

session_destroy();

header("Location: ../pages/index.php");
exit();
