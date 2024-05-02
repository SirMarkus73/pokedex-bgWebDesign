<?php
function post($param, $default)
{
    if (isset($_POST[$param])) {
        return $_POST[$param];
    } else {
        return $default;
    }
}
