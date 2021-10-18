<?php

require_once 'view/includes/head.php';

switch($url)
{
    case 'home':
        include_once 'view/home.php';
        break;
    case 'devocionais':
        include_once 'view/devocional/mostrar.php';
        break;
    case "devocionais/criar":
        Usuario::verificaLogin(false, $permissoes->criar_devocional);
        include_once 'view/devocional/criar.php';
        break;
    case "/devocionais/completa":
        header('location: ../public/pdf/devocionais/8b90d2bd6a8407d2a54c03ae863ce5821633743907.pdf');
        break;
    case "/usuario/login":
        Usuario::verificaLogin(true);
        include_once 'view/user/login.php';
        break;
    case "/usuario/sair":
        include_once 'view/user/sair.php';
        break;
    case "/usuario/listar":
        Usuario::verificaLogin(false, $permissoes->listar_usuario);
        include_once 'view/user/listar.php';
        break;
    case "/usuario/cadastrar-cargo":
        Usuario::verificaLogin(false, $permissoes->cadastrar_cargo);
        include_once 'view/user/cadastrar_cargo.php';
        break;
}

if(isset($_GET['id'])){
    if($uri_parse == "/devocionais/detalhar?id=".$_GET['id']){
        include_once "view/devocional/detalhar.php";
    }
}

require_once 'view/includes/footer.php';
