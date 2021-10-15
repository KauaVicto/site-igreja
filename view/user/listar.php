<?php
$usuarios = Usuario::buscarUsuarios();
?>

<main class="main-container">
    <h1>Lista de usuários</h1>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Cargo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($usuarios as $usuario) {
                $cargos = Usuario::buscarCargos($usuario['id_user']);
                $text_cargos = [];
                foreach ($cargos as $cargo) {
                    array_push($text_cargos, $cargo[0]);
                }
            ?>
                <tr>
                    <td><?= $usuario['id_user'] ?></td>
                    <td><?= $usuario['nome'] ?></td>
                    <td><?= implode(', ', $text_cargos); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</main>