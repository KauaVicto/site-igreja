<?php
session_start();

$permissoes = json_decode(file_get_contents('controller/permissoes.json'));


$url = $_GET['url'] ?? 'home';
var_dump($url);
require_once 'controller/ControllerMenuDrop.php';
require_once 'vendor/autoload.php';

require_once 'rotas.php';
