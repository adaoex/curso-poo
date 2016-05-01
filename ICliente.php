<?php

interface ICliente
{
    public function getGrauImportancia();
    public function addEndereco(IEndereco $endereco);
    public function removeEndereco(IEndereco $endereco);
}