<?php

$menu_drop = [
    'usuario' => [
        array(
            'titulo' => 'Criar Devocional',
            'link' => '/devocionais/criar',
            'permissao' => $permissoes->criar_devocional
        ),
        array(
            'titulo' => 'Cadastrar Cargo',
            'link' => '/usuario/cadastrar-cargo',
            'permissao' => $permissoes->cadastrar_cargo
        ),
        array(
            'titulo' => 'Listar Usuários',
            'link' => '/usuario/listar',
            'permissao' => $permissoes->listar_usuario
        )
    ]
];
