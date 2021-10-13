<?php


namespace App\views\titulo;
require __DIR__.'/../../../vendor/autoload.php';
use App\controllers\TituloController;


if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: ../titulo/tituloAdmin.php');
    exit;
}

$id = (int) $_GET['id'];
$tituloController = new TituloController();

if(isset($_POST)){
    $tituloController->editar($id);
}