<?php

namespace Poo\Cliente\Interfaces;

use Poo\Endereco\Interfaces\IEndereco;

interface ICliente
{
    public function getGrauImportancia();
    public function addEndereco(IEndereco $endereco);
    public function removeEndereco(IEndereco $endereco);
}