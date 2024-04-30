<?php
session_start();



function saludar()
{
    if (isset($_SESSION["usuario"])) {
        echo "Bienvenido $_SESSION[usuario]";
    }
}
