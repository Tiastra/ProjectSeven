<?php

namespace App\views\titulo;
require __DIR__.'/../../../vendor/autoload.php';
use App\controllers\TituloController;

$tituloController = new TituloController();

//    echo '<pre>'; print_r($_POST); echo '</pre>'; exit;
if(isset($_POST)){
    $tituloController->cadastrar();
}