<?php
$devocionais = Devocional::buscarBD();

$hoje = date('Y-m-d');
?>
<main class="main-container devocional">
    <h1>Devocionais</h1>
    <div class="grid">
        <div class="row-col-4">
            <?php foreach (array_reverse($devocionais) as $devocional) { ?>
                <div class="card g-col-3 <?= ($hoje == $devocional['data']) ? 'isHoje' : 'notHoje' ?>">
                    <div class="card-body">
                        <div class="card-assunto">
                            <p><b>Assunto:</b> <?= $devocional['assunto'] ?></p>
                        </div>
                        <p class="card-date"><?= $devocional['data'] ?></p>
                        <a href="/devocionais/detalhar?id=<?= $devocional['id'] ?>" class="botao">Acessar</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <a href="/devocionais/criar" class="botao">Criar uma nova Devocional</a>
</main>