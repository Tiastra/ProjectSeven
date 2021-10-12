<?php

namespace App\models;

use App\db\ConectionPS;

class Endereco
{
    /**
     * @var int
     */
    public $id_endereco;
    /**
     * @var string
     */
    public $cep;
    /**
     * @var string
     */
    public $logradouro;
    /**
     * @var int
     */
    public $numero;
    /**
     * @var string
     */
    public $complemento;
    /**
     * @var string
     */
    public $bairro;
    /**
     * @var string
     */
    public $cidade;
    /**
     * @var string
     */
    public $estado;
    /**
     * @var string
     */
    public $pais;

    public function cadastrar(){

        $obDatabase = new ConectionPS('Endereco');
        $this->id_endereco = $obDatabase->insert([
            'cep' => $this->cep,
            'logradouro' => $this->logradouro,
            'numero' => $this->numero,
            'complemento' => $this->complemento,
            'bairro' => $this->bairro,
            'cidade' => $this->cidade,
            'estado' => $this->estado,
            'pais' => $this->pais,
        ]);

        return $this->id_endereco;
    }

    public function atualizar(){

        return (new ConectionPS('Endereco'))->update('id_endereco = '.$this->id_endereco,[
            'cep' => $this->cep,
            'logradouro' => $this->logradouro,
            'numero' => $this->numero,
            'complemento' => $this->complemento,
            'bairro' => $this->bairro,
            'cidade' => $this->cidade,
            'estado' => $this->estado,
            'pais' => $this->pais,
        ]);
    }

    public function excluir(){
        return (new ConectionPS('Endereco'))->delete('id_endereco = '.$this->id_endereco);
    }

    public static function getEndereco($id_endereco){
        return (new ConectionPS('Endereco'))->select('id_endereco = '.$id_endereco)
            ->fetchObject(self::class);
    }
}