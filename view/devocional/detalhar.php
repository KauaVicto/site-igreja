<?php
    $id = $id_devocional;
    $devocional = Devocional::buscarBD($id);
?>

<main class="main-container detalhar">
    <section class="model1">
        <div class="titulo">
            <h3><?= $devocional['assunto'] ?></h3>
        </div>
        <div class="text">
            <?= $devocional['descricao'] ?>
        </div>
        <?php if($devocional['arquivo']){ ?>
            <div class="link"><a href="<?= ROOT ?>/public/pdf/devocionais/<?= $devocional['arquivo'] ?>" id="devocional_completa" target="blank">ABRIR PDF</a></div>
        <?php } ?>
        <img src="<?= ROOT ?>/public/img/icons/icone_devocional.png" alt="">
    </section>
</main>

<div class="controla-height"></div>
