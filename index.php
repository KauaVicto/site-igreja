<?php
session_start();

$permissoes = json_decode(file_get_contents('controller/permissoes.json'));

define('ROOT', 'site-igreja');

$url = $_GET['url'] ?? 'home';


require_once 'controller/ControllerMenuDrop.php';
require_once 'vendor/autoload.php';

require_once 'rotas.php';
