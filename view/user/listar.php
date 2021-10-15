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
            <?php foreach ($usuarios as $usuario) { ?>
                <tr>
                    <th scope="row"><?= $usuario['id_user'] ?></th>
                    <td><?= $usuario['nome'] ?></td>
                    <td><?= $usuario['nome'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</main>