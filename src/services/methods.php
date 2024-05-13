<?php
function post($param, $default)
{
    return $_POST[$param] ?? $default;
}

function get($param, $default)
{
    return $_GET[$param] ?? $default;
}
