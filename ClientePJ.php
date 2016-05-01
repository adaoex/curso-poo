<?php

class ClientePJ implements ICliente
{
    private $nome;
    private $cnpj;
    private $grau;
    private $enderecos;

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
     * @return ClientePJ
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     * @return ClientePJ
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGrau()
    {
        return $this->grau;
    }

    /**
     * @param mixed $grau
     * @return ClientePJ
     */
    public function setGrau($grau)
    {
        $this->grau = $grau;
        return $this;
    }

    public function setGrauImportancia($grau)
    {
        $this->grau = $grau;
        return $this;
    }

    public function getGrauImportancia()
    {
        return $this->grau;
    }

    /**
     * @return mixed
     */
    public function getEnderecos()
    {
        return $this->enderecos;
    }

    /**
     * @param mixed $enderecos
     * @return ClientePF
     */
    public function setEnderecos($enderecos)
    {
        $this->enderecos = $enderecos;
        return $this;
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