<?php

class EnderecoCobranca implements IEndereco
{

    private $logradouro;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;
    
    public function getTipoEndereco()
    {
        return "Endereço de Cobrança";
    }

    /**
     * @return mixed
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * @param mixed $logradouro
     * @return EnderecoCobranca
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     * @return EnderecoCobranca
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     * @return EnderecoCobranca
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $uf
     * @return EnderecoCobranca
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     * @return EnderecoCobranca
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
        return $this;
    }

}