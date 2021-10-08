<?php include_once 'view/includes/head.php'; ?>

<main class="main-container devocional">
    <h1>Devocionais</h1>
    <div class="container">
        <div class="slide" style="width: <?= (count($infos)*240).'px'?>">
            @for($i = count($infos)-1;$i >= 0; $i--)
            <?php $isHoje = (date('d/m/Y', strtotime($infos[$i]->data)) == $hoje) ? true : false ?>
            <div class="card col-md-3 {{ ($isHoje) ? 'isHoje' : 'notHoje' }}">
                <div class="card-body">
                    <div class="card-assunto">
                        <p><b>Assunto:</b> {{ $infos[$i]->assunto }}</p>
                    </div>
                    @if($isHoje)
                    <p class="card-date">Hoje</p>
                    @else
                    <p class="card-date">{{ date('d/m/Y', strtotime($infos[$i]->data)) }}</p>
                    @endif
                    <a href="/devocionais/{{ $infos[$i]->id }}" class="botao">Acessar</a>
                </div>
            </div>
            @endfor
        </div>
    </div>
    <a href="/devocionais/criar" class="botao">Criar uma nova Devocional</a>
</main>

<?php include_once 'view/includes/footer.php'; ?>