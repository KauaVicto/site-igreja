<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IPB - Brumado</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- CSS da Aplicação -->
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/style-login.css">
</head>

<body>

    <div class="imgs-fundo"></div>

    <header>
        <div class="header-container">
            <img src="./public/img/ipb_logo.png" alt="Logo da IPB">
            <nav>
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="informativos">Informativos</a>
                    </li>
                    <li class="dp-menu-pai" id="dp-menu-pai">
                        <a href="/eventos" class="link-drop">Eventos</a>
                        <ul class="dp-menu-filho" id="dp-menu-filho">
                            <li><a href="#" class="link-drop">UPA</a></li>
                            <div class="line-div"></div>
                            <li><a href="#" class="link-drop">UMP</a></li>
                            <div class="line-div"></div>
                            <li><a href="#" class="link-drop">UPH</a></li>
                            <div class="line-div"></div>
                            <li><a href="#" class="link-drop">SAF</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="devocionais">Devocionais</a>
                    </li>
                    <li>
                        <a href="/agenda">Agenda</a>
                    </li>
                    <li class="dp-menu-pai" id="dp-menu-pai">
                        <?php if (isset($_SESSION['logado'])) { ?>
                            <a href="#" class="link-drop"><?= ucfirst($_SESSION['nome_login']) ?></a>
                            <ul class="dp-menu-filho" id="dp-menu-filho">
                                <?php 
                                    foreach($menu_drop['usuario'] as $item) { 
                                        if(count(array_intersect($_SESSION['cargo'], $item['permissao'])) != 0){
                                ?>
                                
                                    <div class="line-div"></div>
                                    <li><a href="<?= $item['link'] ?>" class="link-drop"><?= $item['titulo'] ?></a></li>

                                <?php }} ?>
                                <div class="line-div"></div>
                                <li><a href="/usuario/sair" class="link-drop">Sair</a></li>
                            </ul>
                        <?php } else { ?>
                            <a href="usuario/login">Login</a>
                        <?php } ?>
                    </li>
                </ul>
            </nav>
        </div>
    </header>