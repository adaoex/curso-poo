<?php

namespace Poo\PDO;


use Poo\Cliente\Interfaces\ICliente;
use Poo\Endereco\Interfaces\IEndereco;

class Endereco extends EnderecoDBAbstract
{
    /**
     * ClientePF constructor.
     * @param \PDO $pdo
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct($pdo);
    }

    function persist(IEndereco $endereco)
    {
        //@TODO: limpar dados para inserir no banco de dados
        self::$stmt = self::$pdo->prepare(
            "insert into endereco (uf, bairro, cep, cidade, logradouro, cobranca, cliente_id) 
              values (:uf, :bairro, :cep, :cidade, :logradouro, :cobranca, :cliente)"
        );
        self::$stmt->bindParam(':uf',$endereco->getUf());
        self::$stmt->bindParam(':bairro',$endereco->getBairro());
        self::$stmt->bindParam(':cep',$endereco->getCep());
        self::$stmt->bindParam(':cidade',$endereco->getCidade());
        self::$stmt->bindParam(':logradouro',$endereco->getLogradouro());
        $cod = $endereco->getTipoEndereco()=="C" ?'1' :'0';
        self::$stmt->bindParam(':cobranca', $cod);
        self::$stmt->bindParam(':cliente', $endereco->getCliente()->getId());

        return $this;
        
    }

    public function findByCliente($cliente_id)
    {
        $sql = "SELECT * FROM endereco where cliente_id = $cliente_id ";
        $ends = [];
        foreach ( self::$pdo->query($sql) as $r) {
            $end = new \Poo\Endereco\Tipos\Endereco();
            $end->setId($r['id']);
            $end->setBairro($r['bairro']);
            $end->setCep($r['cep']);
            $end->setCidade($r['cidade']);
            $end->setLogradouro($r['logradouro']);
            $end->setUf($r['uf']);
            $ends[] = $end;
        }
        return $ends;
    }
}