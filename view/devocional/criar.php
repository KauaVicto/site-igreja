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
    <h1>Criar Devocional</h1>
    <div class="row">
        <div class="campo">
            <img src="/<?= ROOT ?>/public/img/icons/icone_assunto.svg" alt="">
            <input type="text" name="assunto" id="assunto" placeholder="Assunto" autocomplete="off">
        </div>
        <div class="campo">
            <img src="/<?= ROOT ?>/public/img/icons/icone_calendario.svg" alt="">
            <input type="date" name="data" id="dia">
        </div>
    </div>
    <div class="campo-textarea">
        <img src="/<?= ROOT ?>/public/img/icons/icone_descricao.svg" alt="">
        <textarea name="descricao" id="descricao" placeholder="Descrição"></textarea>
    </div>
    <div class="campo campo-arquivo">
        <img src="/<?= ROOT ?>/public/img/icons/icone_file.svg" alt="">
        <label for="formFile" class="botao-dev">Adicione um arquivo</label>
        <input class="form-control" type="file" id="formFile" name="arquivo_dev">
    </div>
    <button name="acesso">Criar</button>
</form>

<div class="controla-height"></div>