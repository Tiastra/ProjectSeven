<?php


namespace App\controllers;
require __DIR__.'/../../vendor/autoload.php';
use \App\models\Titulo;
use \App\models\Cliente;
use App\util\DataUtil;
use Exception;


Class TituloController{

    public function listarTodos(){

        $titulos = Titulo::getTitulos();

        foreach ($titulos as $titulo){

            $cliente = Cliente::getCliente($titulo->id_cliente);
            $titulo->id_cliente = $cliente->nome_cliente;
        }

        return $titulos;
    }

    public function buscar($id){

        return Titulo::getTitulo($id);
    }

    /**
     * @throws Exception
     */
    public function cadastrar(){

        $titulo = new Titulo();

        $titulo->descricao_titulo = $_POST['descricao_titulo'];
        $titulo->valor_titulo = $_POST['valor_titulo'];
        $titulo->data_vencimento = $_POST['data_vencimento'];
        $titulo->data_atualizacao = DataUtil::hoje();
        $titulo->id_cliente = $_POST['id_cliente'];
        $titulo->cadastrar();

        header('location: ../titulo/tituloAdmin.php?status=success');
    }

    public function editar($id){

        $titulo = Titulo::getTitulo($id);

        $titulo->descricao_titulo = $_POST['descricao_titulo'];
        $titulo->valor_titulo = $_POST['valor_titulo'];
        $titulo->data_vencimento = $_POST['data_vencimento'];
        $titulo->data_atualizacao = $_POST['data_atualizacao'];
        $titulo->atualizar();

        header('location: ../titulo/tituloAdmin.php');
    }

    public function excluir($id){

        $titulo = Titulo::getTitulo($id);
        $titulo->excluir();

        header('location: ../titulo/tituloAdmin.php');
    }

}