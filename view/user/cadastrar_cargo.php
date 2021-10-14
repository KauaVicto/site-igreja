<?php
$cargos = Usuario::buscaCargo();
?>

<form class="box box-login" action="" method="post">
    <h1>Cadastrar um Cargo</h1>
    <select class="campo" name="cargo" id="">
        <?php foreach ($cargos as $cargo) { ?>
            <option value="<?= $cargo['nome'] ?>"><?= $cargo['nome'] ?></option>
        <?php } ?>
    </select>
    <div class="campo">
        <img src="/public/img/icons/icone_lock.png" alt="">
        <input type="password" name="pass" id="pass" placeholder="Senha">
    </div>

    <button name="acesso">Acessar</button>
</form>