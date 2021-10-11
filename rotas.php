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
    case "/devocionais/completa":
        header('location: ../public/pdf/devocionais/8b90d2bd6a8407d2a54c03ae863ce5821633743907.pdf');
        break;
}

if(isset($_GET['id'])){
    if($uri_parse == "/devocionais/detalhar?id=".$_GET['id']){
        include_once "view/devocional/detalhar.php";
    }
}

require_once 'view/includes/footer.php';
