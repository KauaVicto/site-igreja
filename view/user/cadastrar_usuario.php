<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $assunto = filter_input(INPUT_POST, 'assunto');
    $descricao = filter_input(INPUT_POST, 'descricao');
    $data = filter_input(INPUT_POST, 'data');
    $arquivo = explode('.', $_FILES['arquivo_dev']['name']);

    $pdo = Devocional::salvarBD($assunto, $descricao, $data, $arquivo);
}
?>

<form class="box box-devocional" action="" method="post">
    <h1>Cadastrar</h1>
    <div class="row">
        <div class="campo">
            <img src="/public/img/icons/icone_assunto.svg" alt="">
            <input type="text" name="nome" id="nome" placeholder="Nome Completo" autocomplete="off">
        </div>
        <div class="campo">
            <img src="/public/img/icons/icone_calendario.svg" alt="">
            <input type="text" name="telefone" id="telefone" placeholder="Telefone" onkeypress="mask(event, this, '(##) #####-####')" maxlength="15">
        </div>
    </div>
    <div class="row">
        <div class="campo">
            <img src="/public/img/icons/icone_assunto.svg" alt="">
            <input type="text" name="nome" id="nome" placeholder="Nome Completo" autocomplete="off">
        </div>
    </div>
    <div class="campo campo-arquivo">
        <img src="/public/img/icons/icone_file.svg" alt="">
        <label for="formFile" class="botao-dev">Adicione um arquivo</label>
        <input class="form-control" type="file" id="formFile" name="arquivo_dev">
    </div>
    <button name="acesso">Criar</button>
</form>

<div class="controla-height"></div>