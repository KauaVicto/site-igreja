<?php
session_start();

$uri_parse = $_SERVER['REQUEST_URI'];
require_once 'vendor/autoload.php';

require_once 'rotas.php';
