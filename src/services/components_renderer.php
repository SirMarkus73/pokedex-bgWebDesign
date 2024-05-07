<?php

function render_component(string $component, array $data = [])
{
    extract($data);
    require __DIR__ . "/../components/$component.php";
}
