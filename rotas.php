<?php

switch($uri_parse)
{
    case '/':
        include_once 'view/home.php';
        break;
    case '/informativos':
        include_once 'view/informativos.php';
        break;
    case '/devocionais':
        include_once 'view/devocional/mostrar_devocionais.php';
        break;
}
