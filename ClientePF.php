<?php

class ClientePF implements ICliente
{
    private $nome;
    private $cpf;
    private $rg;
    private $enderecos;
    private $grauImportancia;

    public function __construct()
    {
        $this->enderecos = new ArrayObject();
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     * @return ClientePF
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     * @return ClientePF
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * @param mixed $rg
     * @return ClientePF
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGrauImportancia()
    {
        return $this->grauImportancia;
    }

    /**
     * @param mixed $grauImportancia
     * @return ClientePF
     */
    public function setGrauImportancia($grauImportancia)
    {
        $this->grauImportancia = $grauImportancia;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEnderecos()
    {
        return $this->enderecos;
    }

    public function addEndereco( IEndereco $endereco )
    {
        $this->enderecos->append($endereco);
        return $this;
    }

    public function removeEndereco( IEndereco $endereco )
    {
        $this->enderecos->offsetUnset($endereco);
    }

}