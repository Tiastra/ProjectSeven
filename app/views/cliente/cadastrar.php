<?php

namespace App\views\cliente;
require __DIR__.'/../../../vendor/autoload.php';
use App\controllers\ClienteController;

$clienteController = new ClienteController();

//    echo '<pre>'; print_r($_POST); echo '</pre>'; exit;
if(isset($_POST)){
    $clienteController->cadastrar();
}