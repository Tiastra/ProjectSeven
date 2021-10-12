<?php


namespace App\views\cliente;
require __DIR__.'/../../../vendor/autoload.php';
use App\controllers\ClienteController;


if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: ../cliente/clienteAdmin.php');
    exit;
}

$id = (int) $_GET['id'];
$clienteController = new ClienteController();

if(isset($_POST)){
    $clienteController->editar($id);
}