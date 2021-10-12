<?php

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
}