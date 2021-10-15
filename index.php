<?php
session_start();

$permissoes = json_decode(file_get_contents('controller/permissoes.json'));

$uri_parse = $_SERVER['REQUEST_URI'];
require_once 'vendor/autoload.php';

require_once 'rotas.php';
