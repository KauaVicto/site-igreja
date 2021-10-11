<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $assunto = filter_input(INPUT_POST, 'assunto');
        $descricao = filter_input(INPUT_POST, 'descricao');
        $data = filter_input(INPUT_POST, 'data');
        $arquivo = explode('.', $_FILES['arquivo_dev']['name']);

        $pdo = Devocional::salvarBD($assunto, $descricao, $data, $arquivo);
    }
?>

<main class="main-container criar-devocional">
    
    <form action="/devocionais/criar" method="POST" enctype="multipart/form-data">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="assunto" class="form-label">Assunto</label>
                <input type="text" class="form-control" id="assunto" name="assunto">
            </div>
            <div class="col-md-6">
                <label for="dia" class="form-label">Dia</label>
                <input type="date" class="form-control" id="dia" name="data">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao"></textarea>
            </div>
        </div>
        <div class="row mb-5">
            <div class="mb-3">
                <label for="formFile" class="form-label">Selecione o arquivo PDF</label>
                <input class="form-control" type="file" id="formFile" name="arquivo_dev">
            </div>
        </div>
        <div class="div-botao"><button type="submit" class="botao">Criar Devocional</button></div>
    </form>
</main>

<div class="controla-height"></div>
