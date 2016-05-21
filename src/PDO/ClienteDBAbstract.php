<?php

namespace Poo\PDO;

use Poo\Cliente\Interfaces\ICliente;
use Poo\Cliente\Tipos\ClientePF;

abstract class ClienteDBAbstract
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
            "create table if not exists cliente (
                id INTEGER PRIMARY KEY AUTOINCREMENT, 
                nome text   not null, 
                cpf text    null,
                cnpj text   null,
                rg text     null,
                grau_importancia text not null,
                tipo text not null
            )"
        );

    }

    public function flush( )
    {
        if ( self::$stmt ==! null) {
            self::$stmt->execute();

            return self::$pdo->lastInsertId();
        }
    }

    abstract function persist( ICliente $cliente );

}