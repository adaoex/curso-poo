<?php

namespace Poo\PDO;


use Poo\Cliente\Interfaces\ICliente;

class ClientePJ extends ClienteDBAbstract
{
    /**
     * ClientePF constructor.
     * @param \PDO $pdo
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct($pdo);
    }

    function persist(ICliente $cliente)
    {

        //@TODO: limpar dados para inserir no banco de dados
        self::$stmt = self::$pdo->prepare(
            "insert into cliente (nome, cnpj, grau_importancia, tipo) 
              values (:nome, :cnpj, :grau_importancia, 'PJ')"
        );

        self::$stmt->bindParam(':nome',$cliente->getNome());
        self::$stmt->bindParam(':cnpj',$cliente->getCnpj());
        self::$stmt->bindParam(':grau_importancia',$cliente->getGrauImportancia());

        return $this;

    }

    public function findAll()
    {
        $sql = "SELECT * FROM cliente where tipo = 'PJ' ";
        $clientes = [];
        foreach ( self::$pdo->query($sql) as $r) {
            $cliente = new \Poo\Cliente\Tipos\ClientePJ();
            $cliente->setId($r['id']);
            $cliente->setCnpj($r['cnpj']);
            $cliente->setGrauImportancia($r['grau_importancia']);
            $cliente->setNome($r['nome']);

            $clientes[] = $cliente;
        }
        return $clientes;
    }

    public function find($id)
    {
        $sql = "SELECT * FROM cliente where id = $id ";
        $cliente = null;
        foreach ( self::$pdo->query($sql) as $r) {
            $cliente = new \Poo\Cliente\Tipos\ClientePJ();
            $cliente->setId($r['id']);
            $cliente->setCnpj($r['cnpj']);
            $cliente->setGrauImportancia($r['grau_importancia']);
            $cliente->setNome($r['nome']);
        }
        return $cliente;
    }
    
}