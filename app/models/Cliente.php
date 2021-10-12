<?php

namespace App\models;

use App\db\ConectionPS;
use \PDO;


class Cliente
{
    /**
     * @var int
     */
    public $id_cliente;
    /**
     * @var string
     */
    public $nome_cliente;
    /**
     * @var int
     */
    public $documento_cliente;
    /**
     * @var datetime
     */
    public $data_nascimento;
    /**
     * @var string
     */
    public $email_cliente;
    /**
     * @var string
     */
    public $telefone_cliente;
    /**
     * @var int
     */
    public $id_endereco;


    public function cadastrar(){

        $obDatabase = new ConectionPS('Cliente');
        $this->id_cliente = $obDatabase->insert([
            'nome_cliente' => $this->nome_cliente,
            'documento_cliente' => $this->documento_cliente,
            'data_nascimento' => $this->data_nascimento,
            'email_cliente' => $this->email_cliente,
            'telefone_cliente' => $this->telefone_cliente,
            'id_endereco' => $this->id_endereco,
        ]);

        return true;
    }

    public function atualizar(){
        return (new ConectionPS('Cliente'))->update('id_cliente = '.$this->id_cliente,[
            'nome_cliente' => $this->nome_cliente,
            'documento_cliente' => $this->documento_cliente,
            'data_nascimento' => $this->data_nascimento,
            'email_cliente' => $this->email_cliente,
            'telefone_cliente' => $this->telefone_cliente,
            'id_endereco' => $this->id_endereco,
        ]);
    }

    public function excluir(){
        return (new ConectionPS('Cliente'))->delete('id_cliente = '.$this->id_cliente);
    }

    public static function getClientes($where = null, $order = null, $limit = null){
        return (new ConectionPS('Cliente'))->select($where,$order,$limit)
            ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public static function getCliente($id_cliente){
        return (new ConectionPS('Cliente'))->select('id_cliente = '.$id_cliente)
            ->fetchObject(self::class);
    }

}