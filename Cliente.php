<?php

class Cliente
{
    public $nome;
    public $cpf;
    public $rg;
    public $endereco;


    public function __construct($nome, $cpf, $rg, $endereco)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->endereco = $endereco;
    }

}