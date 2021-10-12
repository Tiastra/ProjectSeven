<?php

namespace App\views\cliente;
require __DIR__.'/../../../vendor/autoload.php';
use App\controllers\ClienteController;
use App\controllers\EnderecoController;
use App\models\Cliente;
use App\models\Endereco;


if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: ../cliente/clienteAdmin.php');
    exit;
}

$clienteController = new ClienteController();
$enderecoController = new EnderecoController();


$cliente = $clienteController->buscar($_GET['id']);
//    echo '<pre>'; print_r($cliente); echo '</pre>'; exit;
$endereco = $enderecoController->buscar($cliente->id_endereco);
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
        <h2>Cadastro de Cliente</h2>
    </div>
    <form action="editar.php?id=<?=$cliente->id_cliente?>" method="post">
        <h4>Editar Cliente</h4>
        <p>
            <label>Nome
                <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nome" required name="nome_cliente" value="<?=$cliente->nome_cliente?>">
            </label>
        </p>
        <p>
            <label>Documento
                <input class="w3-input w3-padding-16 w3-border" type="number" placeholder="CPF ou CNPJ (somente números)" required name="documento_cliente" value="<?=$cliente->documento_cliente?>">
            </label>
        </p>
        <p>
            <label>Data de Nascimento
                <input class="w3-input w3-padding-16 w3-border" type="date" placeholder="Data de Nascimento" required name="data_nascimento" value="<?=$cliente->data_nascimento?>">
            </label>
        </p>
        <p>
            <label>e-mail
                <input class="w3-input w3-padding-16 w3-border" type="email" placeholder="e-mail" required name="email_cliente" value="<?=$cliente->email_cliente?>">
            </label>
        </p>
        <p>
            <label>Telefone
                <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Telefone" name="telefone_cliente" value="<?=$cliente->telefone_cliente?>">
            </label>
        </p>
        <hr>
        <h4>Dados do Cliente - Endereço</h4>
        <p>
            <label>
                <input class="w3-input w3-padding-16 w3-border" type="number" placeholder="CEP (somente números)" name="cep" value="<?=$endereco->cep?>">
            </label>
        </p>
        <p>
            <label>
                <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Logradouro" required name="logradouro" value="<?=$endereco->logradouro?>">
            </label>
        </p>
        <p>
            <label>
                <input class="w3-input w3-padding-16 w3-border" type="number" placeholder="Número" required name="numero" value="<?=$endereco->numero?>">
            </label>
        </p>
        <p>
            <label>
                <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Complemento" name="complemento" value="<?=$endereco->complemento?>">
            </label>
        </p>
        <p>
            <label>
                <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Bairro" required name="bairro" value="<?=$endereco->bairro?>">
            </label>
        </p>
        <p>
            <label>
                <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Cidade" required name="cidade" value="<?=$endereco->cidade?>">
            </label>
        </p>
        <p>
            <label>
                <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Estado" required name="estado" value="<?=$endereco->estado?>">
            </label>
        </p>
        <p>
            <label>
                <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="País" required name="pais" value="<?=$endereco->pais?>">
            </label>
        </p>
        <p>
            <button class="w3-button w3-green w3-padding-large" id="btn-enviar" type="submit" >Salvar</button>
            <a href="clienteAdmin.php"><button class="w3-button w3-red w3-padding-large" type="button">Voltar</button></a>
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
