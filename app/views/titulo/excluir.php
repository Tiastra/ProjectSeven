<?php

namespace App\views\titulo;
require __DIR__.'/../../../vendor/autoload.php';
use App\controllers\TituloController;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: ../cliente/clienteAdmin.php');
    exit;
}

$tituloController = new TituloController();

$tituloController->excluir($_GET['id']);
