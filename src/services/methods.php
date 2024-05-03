<?php
function post($param, $default)
{
    if (isset($_POST[$param])) {
        return $_POST[$param];
    } else {
        return $default;
    }
}

function get($param, $default)
{
    if (isset($_GET[$param])) {
        return $_GET[$param];
    } else {
        return $default;
    }
}
