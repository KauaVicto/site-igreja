<?php
$devocionais = Devocional::buscarBD();

$hoje = date('d/m/Y');
?>
<main class="main-container devocional">
    <h1>Devocionais</h1>
    <div class="grid">
        <div class="row-col-4">
            <?php foreach (array_reverse($devocionais) as $key => $devocional) { 
                if($key < 5){
            ?>
                <?php $data_devocional = date('d/m/Y', strtotime($devocional['data'])); ?>
                <div class="card g-col-3 <?= ($hoje == $data_devocional) ? 'isHoje' : 'notHoje' ?>">
                    <div class="card-body">
                        <div class="card-assunto">
                            <p><b>Assunto:</b> <?= $devocional['assunto'] ?></p>
                        </div>
                        <p class="card-date"><b>Dia:</b> <?= ($hoje == $data_devocional) ? 'hoje' : $data_devocional ?></p>

                        <a href="/devocionais/detalhar?id=<?= $devocional['id'] ?>" class="botao">Acessar</a>
                    </div>
                </div>
            <?php }} ?>
        </div>
    </div>
    <div class="div-botao">
        <a href="/devocionais/criar" class="botao">Criar uma nova Devocional</a>
    </div>
</main>    

<div class="controla-height"></div>