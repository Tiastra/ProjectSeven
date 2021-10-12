<?php


namespace App\controllers;
require __DIR__.'/../../vendor/autoload.php';
use \App\models\Cliente;
use \App\models\Endereco;


Class EnderecoController{

    public function buscar($id){

        return Endereco::getEndereco($id);
    }

}