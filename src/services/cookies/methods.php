<?php
function kill_cookies(): void
{
    session_start();
    session_unset();
    session_destroy();
}