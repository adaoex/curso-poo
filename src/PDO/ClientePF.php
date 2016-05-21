<?php

namespace Poo\PDO;

use Poo\Cliente\Interfaces\ICliente;

class ClientePF extends ClienteDBAbstract
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
            "insert into cliente (nome, cpf, rg, grau_importancia, tipo) 
              values (:nome, :cpf, :rg, :grau_importancia, 'PF')"
        );
        self::$stmt->bindParam(':nome',$cliente->getNome());
        self::$stmt->bindParam(':cpf',$cliente->getCpf());
        self::$stmt->bindParam(':rg',$cliente->getRg());
        self::$stmt->bindParam(':grau_importancia',$cliente->getGrauImportancia());

        return $this;
    }

    public function findAll()
    {
        $sql = "SELECT * FROM cliente where tipo = 'PF'";
        $clientes = [];
        foreach ( self::$pdo->query($sql) as $r) {
            $cliente = new \Poo\Cliente\Tipos\ClientePF();
            $cliente->setId($r['id']);
            $cliente->setCpf($r['cpf']);
            $cliente->setGrauImportancia($r['grau_importancia']);
            $cliente->setNome($r['nome']);
            $cliente->setRg($r['rg']);
            
            $clientes[] = $cliente;
        }
        return $clientes;
    }


    public function find($id)
    {
        $sql = "SELECT * FROM cliente where id = $id ";
        $cliente = null;
        foreach ( self::$pdo->query($sql) as $r) {
            $cliente = new \Poo\Cliente\Tipos\ClientePF();
            $cliente->setId($r['id']);
            $cliente->setCpf($r['cpf']);
            $cliente->setGrauImportancia($r['grau_importancia']);
            $cliente->setNome($r['nome']);
            $cliente->setRg($r['rg']);
        }
        return $cliente;
    }


}