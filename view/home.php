<?php
    $devocionais = Devocional::buscarBD();
    $hoje = date('Y-m-d');
    $devocional_titulo = '';
    $devocional_descricao = '';

    foreach($devocionais as $devocional){
        if($devocional['data'] == $hoje){
            $devocional_id = $devocional['id'];
            $devocional_titulo = $devocional['assunto'];
            $devocional_descricao = $devocional['descricao'];
        }
    }
?>

<main class="main-container home">
    <section class="model1">
        <div class="titulo">
            <h3>Igreja Presbiteriana de Brumado</h3>
        </div>
        <div class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, illum eum magnam minus corporis hic ratione provident soluta iusto blanditiis labore optio laudantium nobis saepe et! Aut dignissimos quod sed? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores officia libero delectus aliquid omnis similique? Delectus fugit at ea, reprehenderit nostrum commodi, enim non repudiandae laudantium nesciunt consequuntur magni nisi!
        </div>
        <img src="public/img/icons/icone_igreja.png" alt="">
    </section>

    <?php if($devocional_descricao != ''){ ?>
    <section class="model1">
        <div class="titulo">
            <h3>Devocional Diária</h3>
        </div>
        <div class="text">
            <h2><?= $devocional_titulo ?></h2>
            <?= (strlen($devocional_descricao) > 250) ? substr($devocional_descricao, 0, 250).'...' : $devocional_descricao ?>
        </div>
        <div class="link"><a href="<?= ROOT ?>/devocional/<?= $devocional_id ?>">DEVOCIONAL COMPLETA</a></div>
        <img src="public/img/icons/icone_devocional.png" alt="">
    </section>
    <?php } ?>

    <section class="model2">
        <div class="titulo">
            <h3>Canal APECOM</h3>
        </div>
        <div class="container">
            <div class="slide" style="width: <?= (8*160).'px'?>">
                <div class="elem-apecom">opa</div>
                <div class="elem-apecom">opa</div>
                <div class="elem-apecom">opa</div>
                <div class="elem-apecom">opa</div>
                <div class="elem-apecom">opa</div>
                <div class="elem-apecom">opa</div>
                <div class="elem-apecom">opa</div>
                <div class="elem-apecom">opa</div>
            </div>
        </div>
        <img src="public/img/icons/icone_apecom.png" alt="">
    </section>

    <section class="model3">
        <img src="public/img/icons/icone_boletim.png" alt="">
        <div class="link"><a href="/boletim">Baixar Boletim Semanal</a></div>
    </section>

    <div class="controla-height"></div>
</main>