<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IPB - Brumado</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- CSS da Aplicação -->
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/style-login.css">
</head>

<body>

    <div class="imgs-fundo"></div>

    <header>
        <div class="header-container">
            <img src="../public/img/ipb_logo.png" alt="Logo da IPB">
            <nav>
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/informativos">Informativos</a>
                    </li>
                    <li>
                        <a href="/eventos">Eventos</a>
                    </li>
                    <li>
                        <a href="/devocionais">Devocionais</a>
                    </li>
                    <li>
                        <a href="/agenda">Agenda</a>
                    </li>
                    <li>
                        <?php if(isset($_SESSION['logado'])){ ?>
                            <a href="/usuario/sair"><?= $_SESSION['nome'] ?></a>
                        <?php }else{ ?>
                            <a href="/usuario/login">Login</a>
                        <?php } ?>
                    </li>
                </ul>
            </nav>
        </div>
    </header>