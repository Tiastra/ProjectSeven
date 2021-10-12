<?php

include("../models/Cliente.php");
include("../models/Endereco.php");

Class ClienteController{

//    public function listar(){
//        $clientes = Cliente::
//    }

    public function cadastrar(){

        $endereco = new Endereco();
        $cliente = new Cliente();

        $endereco->cep = $_POST['cep'];
        $endereco->logradouro = $_POST['logradouro'];
        $endereco->numero = $_POST['numero'];
        $endereco->complemento = $_POST['complemento'];
        $endereco->bairro = $_POST['bairro'];
        $endereco->cidade = $_POST['cidade'];
        $endereco->estado = $_POST['estado'];
        $endereco->pais = $_POST['pais'];
        $id_endereco = $endereco->cadastrar();

        $cliente->nome_cliente = $_POST['nome_cliente'];
        $cliente->documento_cliente = $_POST['documento_cliente'];
        $cliente->data_nascimento = $_POST['data_nascimento'];
        $cliente->email_cliente = $_POST['email_cliente'];
        $cliente->telefone_cliente = $_POST['telefone_cliente'];
        $cliente->id_endereco = $id_endereco;
        $cliente->cadastrar();

        header('location: ../views/cliente/clienteAdmin.php?status=success');
    }
}