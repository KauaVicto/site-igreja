<?php
$devocionais = Devocional::buscarBD();
?>

<main class="main-container devocional">
    <h1>Devocionais</h1>
    <div class="container">
        <div class="slide" style="width: <?= count($devocionais) * 220 ?>px">
            <?php foreach($devocionais as $devocional){ ?>
                <div class="card col-md-3">
                    <div class="card-body">
                        <div class="card-assunto">
                            <p><b>Assunto:</b> <?= $devocional['assunto'] ?></p>
                        </div>
                        <p class="card-date"><?= $devocional['data'] ?></p>
                        <a href="/devocionais/1" class="botao">Acessar</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <a href="/devocionais/criar" class="botao">Criar uma nova Devocional</a>
</main>