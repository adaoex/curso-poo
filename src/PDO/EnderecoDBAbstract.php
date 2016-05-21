<?php

namespace Poo\PDO;

use Poo\Endereco\Interfaces\IEndereco;

abstract class EnderecoDBAbstract
{

    static protected $pdo;

    static protected $stmt;

    /**
     * DBAbstract constructor.
     * @param \PDO $pdo
     */
    public function __construct( \PDO $pdo )
    {
        self::$pdo = $pdo;

        self::$pdo->exec(
            "create table if not exists endereco (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                cliente_id integer not null,
                uf text not NULL, 
                bairro text not NULL, 
                cep text not NULL, 
                cidade text not NULL, 
                logradouro text not NULL, 
                cobranca integer null
            )"
        );

    }

    public function flush( ){
        if (self::$stmt ==! null) {
            self::$stmt->execute();
            
            return self::$pdo->lastInsertId();
        }
    }

    abstract function persist( IEndereco $endereco );

}