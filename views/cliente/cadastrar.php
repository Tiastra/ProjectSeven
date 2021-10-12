<?php

include("../../controllers/ClienteController.php");

$clienteController = new ClienteController();

//    echo '<pre>'; print_r($_POST); echo '</pre>'; exit;
if(isset($_POST)){
    $clienteController->cadastrar();
}