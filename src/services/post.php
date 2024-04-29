<?php
function post($param, $valor_per_defecte)
{
    if (isset($_POST[$param])) {
        return $_POST[$param];
    } else {
        return $valor_per_defecte;
    }
}
