<?php

namespace App\views\titulo;
require __DIR__.'/../../../vendor/autoload.php';
use App\controllers\ClienteController;

$clienteController = new ClienteController();

$clientes = $clienteController->listarTodos();
$resultados = '';

foreach($clientes as $cliente){
    $resultados .= '<option  class="w3-select w3-large" value='.$cliente->id_cliente.'> '.$cliente->nome_cliente.' </option>';
}

$resultados = strlen($resultados) ? $resultados : '<option value="" disabled selected>Nenhum Cliente cadastrado</option>';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Project Seven</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/W3.css">

    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
    </style>
</head>

<body class="w3-light-grey">

<div class="w3-container" id="contact">
    <div class="w3-red">
        <h2>Cadastro de Título</h2>
    </div>
    <form action="cadastrar.php" method="post">
        <h4>Dados do Título</h4>
        <p>
            <label>
            <select class="w3-select w3-padding-16 w3-border w3-margin-bottom" name="id_cliente" required>
                <option class="w3-select w3-large" value="" disabled selected>Selecione um Cliente</option>
            </label>
            <?=$resultados?>
        </p>
        <p>
            <label>
                <input class="w3-input w3-padding-16 w3-border w3-margin-top" type="text" placeholder="Informações da Dívida" required name="descricao_titulo">
            </label>
        </p>
        <p>
            <label>
                <input class="w3-input w3-padding-16 w3-border" type="number" placeholder="Valor R$" required name="valor_titulo">
            </label>
        </p>
        <p>
            <label>Data de Vencimento
                <input class="w3-input w3-padding-16 w3-border" type="date" placeholder="Data de Nascimento" required name="data_vencimento">
            </label>
        </p>

        <p>
            <button class="w3-button w3-green w3-padding-large" id="btn-enviar" type="submit" >Salvar</button>
            <a href="tituloAdmin.php"><button class="w3-button w3-red w3-padding-large" type="button">Voltar</button></a>
        </p>
    </form>
</div>

<footer class="w3-padding-32 w3-black w3-center">
    <div class="w3-xlarge w3-padding-16">
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <a href="https://www.linkedin.com/in/carlos-tiago-oliveira-03a5a0182/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
    </div>
    <p>Powered by <a href="https://github.com/Tiastra" target="_blank" class="w3-hover-text-green">Tiago Oliveira</a></p>
</footer>

</body>
</html>
