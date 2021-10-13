<?php

namespace App\models;

use App\db\ConectionPS;
use DateTime;
use \PDO;


class Titulo
{
    /**
     * @var int
     */
    public $id_titulo;

    /**
     * @var string
     */
    public $descricao_titulo;

    /**
     * @var double
     */
    public $valor_titulo;

    /**
     * @var datetime
     */
    public $data_vencimento;

    /**
     * @var datetime
     */
    public $data_atualizacao;

    /**
     * @var int
     */
    public $id_cliente;


    public function cadastrar(){

        $obDatabase = new ConectionPS('Titulo');
        $this->id_titulo = $obDatabase->insert([
            'descricao_titulo' => $this->descricao_titulo,
            'valor_titulo' => $this->valor_titulo,
            'data_vencimento' => $this->data_vencimento,
            'data_atualizacao' => $this->data_atualizacao,
            'id_cliente' => $this->id_cliente,
        ]);

        return true;
    }

    public function atualizar(){
        return (new ConectionPS('Titulo'))->update('id_titulo = '.$this->id_titulo,[
            'descricao_titulo' => $this->descricao_titulo,
            'valor_titulo' => $this->valor_titulo,
            'data_vencimento' => $this->data_vencimento,
            'data_atualizacao' => $this->data_atualizacao,
        ]);
    }

    public function excluir(){
        return (new ConectionPS('Titulo'))->delete('id_titulo = '.$this->id_titulo);
    }

    public static function getTitulos($where = null, $order = null, $limit = null){
        return (new ConectionPS('Titulo'))->select($where,$order,$limit)
            ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public static function getTitulo($id_titulo){
        return (new ConectionPS('Titulo'))->select('id_titulo = '.$id_titulo)
            ->fetchObject(self::class);
    }

}