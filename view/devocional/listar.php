<?php
$devocionais = Devocional::buscarBD();
date_default_timezone_set('America/Bahia');
$hoje = date('d/m/Y');
?>
<main class="main-container devocional">
    <h1>Devocionais</h1>
    <div class="grid">
        <div class="row-col-4">
            <?php foreach (array_reverse($devocionais) as $key => $devocional) {
                if ($key < 5) {
                    $data_devocional = date('d/m/Y', strtotime($devocional['data']));
            ?>
                    <div class="card g-col-3 <?= ($hoje == $data_devocional) ? 'isHoje' : 'notHoje' ?>">
                        <div class="card-body">
                            <div class="card-assunto">
                                <p><b>Assunto:</b> <?= $devocional['assunto'] ?></p>
                            </div>
                            <p class="card-date"><b>Dia:</b> <?= ($hoje == $data_devocional) ? 'hoje' : $data_devocional ?></p>

                            <a href="/<?= ROOT ?>/devocional/<?= $devocional['id'] ?>" class="botao">Acessar</a>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
    <div class="div-botao">
        <?php if (count(array_intersect($_SESSION['cargo'], $item['permissao'])) != 0) { ?>
            <a href="/devocionais/criar" class="botao">Criar uma nova Devocional</a>
        <?php } ?>
    </div>
</main>

<div class="controla-height"></div>