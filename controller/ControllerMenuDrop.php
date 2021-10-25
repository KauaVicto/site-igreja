<?php

$menu_drop = [
    'usuario' => [
        array(
            'titulo' => 'Criar Devocional',
            'link' => ROOT. '/devocional/criar',
            'permissao' => $permissoes->criar_devocional
        ),
        array(
            'titulo' => 'Cadastrar Cargo',
            'link' => ROOT. '/usuario/cadastrar-cargo',
            'permissao' => $permissoes->cadastrar_cargo
        ),
        array(
            'titulo' => 'Listar Usuários',
            'link' => ROOT. '/usuario/listar',
            'permissao' => $permissoes->listar_usuario
        )
    ]
];
