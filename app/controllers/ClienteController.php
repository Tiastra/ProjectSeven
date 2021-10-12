<?php


namespace App\controllers;
require __DIR__.'/../../vendor/autoload.php';
use \App\models\Cliente;
use \App\models\Endereco;


Class ClienteController{

    public function listarTodos(){

        return Cliente::getClientes();
    }

    public function buscar($id){

        return Cliente::getCliente($id);
    }

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

        header('location: ../cliente/clienteAdmin.php?status=success');
    }

    public function editar($id){

//            echo '<pre>'; print_r($id); echo '</pre>'; exit;

        $cliente = Cliente::getCliente($id);

        $cliente->nome_cliente = $_POST['nome_cliente'];
        $cliente->documento_cliente = $_POST['documento_cliente'];
        $cliente->data_nascimento = $_POST['data_nascimento'];
        $cliente->email_cliente = $_POST['email_cliente'];
        $cliente->telefone_cliente = $_POST['telefone_cliente'];
        $cliente->atualizar();


        $endereco = Endereco::getEndereco($cliente->id_endereco);

        $endereco->cep = $_POST['cep'];
        $endereco->logradouro = $_POST['logradouro'];
        $endereco->numero = $_POST['numero'];
        $endereco->complemento = $_POST['complemento'];
        $endereco->bairro = $_POST['bairro'];
        $endereco->cidade = $_POST['cidade'];
        $endereco->estado = $_POST['estado'];
        $endereco->pais = $_POST['pais'];
        $endereco->atualizar();

        header('location: ../cliente/clienteAdmin.php');
    }

    public function excluir($id){

        $cliente = Cliente::getCliente($id);
        $cliente->excluir();

        header('location: ../cliente/clienteAdmin.php');
    }

}