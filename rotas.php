<?php

require_once 'view/includes/head.php';

switch($uri_parse)
{
    case '/':
        include_once 'view/home.php';
        break;
    case '/informativos':
        include_once 'view/informativos.php';
        break;
    case '/devocionais':
        include_once 'view/devocional/mostrar.php';
        break;
    case "/devocionais/criar":
        include_once 'view/devocional/criar.php';
        break;
}
require_once 'view/includes/footer.php';
