<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = filter_input(INPUT_POST, 'user');
    $pass = filter_input(INPUT_POST, 'pass');

    Usuario::Logar($login, $pass);

}

?>


<form class="box box-login" action="" method="post">
    <h1>LOGIN</h1>
    <div class="campo">
        <img src="/public/img/icons/icone_user.png" alt="">
        <input type="text" name="user" id="user" placeholder="Login" autocomplete="off">
    </div>
    <div class="campo">
        <img src="/public/img/icons/icone_lock.png" alt="">
        <input type="password" name="pass" id="pass" placeholder="Senha">
    </div>
    <div class="link-cadastro">Ainda não possui cadastro? <br><a href="/usuario/cadastrar">Clique aqui fazer um cadastro!</a></div>
    <button name="acesso">Acessar</button>
</form>

<div class="controla-height"></div>