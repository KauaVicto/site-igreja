<?php
session_start();

$uri_parse = $_SERVER['REQUEST_URI'];

require_once 'controller/Devocional.php';
require_once 'controller/Usuario.php';
require_once 'controller/ConectBD.php';
require_once 'rotas.php';

?>

