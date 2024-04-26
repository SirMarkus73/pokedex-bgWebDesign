<?php
function get($param, $valor_per_defecte)
{
    if (isset($_GET[$param])) {
        return $_GET[$param];
    } else {
        return $valor_per_defecte;
    }
}

$dark = get("dark", "");
