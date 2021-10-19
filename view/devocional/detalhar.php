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
        <div class="link"><a href="#" id="devocional_completa">DEVOCIONAL COMPLETA</a></div>
        <img src="../../public/img/icons/icone_devocional.png" alt="">
    </section>
</main>
