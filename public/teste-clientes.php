<?php
include __DIR__ . '/../autoloader.php';

$db = new PDO("sqlite:".__DIR__."/../cursopoo.db");

$pfDB = new Poo\PDO\ClientePF($db);
$pjDB = new Poo\PDO\ClientePJ($db);
$enderecoDB = new Poo\PDO\Endereco($db);

$cliente1 = new Poo\Cliente\Tipos\ClientePF();
$endereco1 = new Poo\Endereco\Tipos\Endereco();
$endereco1->setLogradouro("Log 1")->setBairro("Bairo 1")->setCidade("Cid 1")->setCep(70)->setUf("DF");
$cliente1->setCpf(11)->setNome("João")->setRg(1)->addEndereco($endereco1)->setGrauImportancia(2);

echo $id = $pfDB->persist($cliente1)->flush();
$cliente1->setId($id);
$endereco1->setCliente($cliente1);

echo $enderecoDB->persist($endereco1)->flush();


$cliente2 = new Poo\Cliente\Tipos\ClientePF();
$endereco2 = new Poo\Endereco\Tipos\Endereco();
$endereco2_cob = new Poo\Endereco\Tipos\EnderecoCobranca();
$endereco2->setLogradouro("Log 2")->setBairro("Bairro")->setCidade("Cid")->setCep(70)->setUf("GO");
$endereco2_cob->setLogradouro("Log Cob")->setBairro("Bairro")->setCidade("Cid")->setCep(70)->setUf("GO");
$cliente2->setCpf(12)->setNome("João")->setRg(1)
    ->addEndereco($endereco2)->addEndereco($endereco2_cob)->setGrauImportancia(3);

echo $id = $pfDB->persist($cliente2)->flush();
$cliente2->setId($id);
$endereco2->setCliente($cliente2);

echo $enderecoDB->persist($endereco2)->flush();


$cliente3 = new Poo\Cliente\Tipos\ClientePJ();
$endereco3 = new Poo\Endereco\Tipos\Endereco();
$endereco3_cob = new Poo\Endereco\Tipos\EnderecoCobranca();
$endereco3->setLogradouro("Log 3")->setBairro("Bairro")->setCidade("Cid")->setCep(70)->setUf("GO");
$endereco3_cob->setLogradouro("Log Cob")->setBairro("Bairro")->setCidade("Cid")->setCep(70)->setUf("GO");
$cliente3->setCnpj(1313)->setNome("Industria A")->addEndereco($endereco3)
    ->addEndereco($endereco3_cob)->setGrauImportancia(4);

echo $id = $pjDB->persist($cliente3)->flush();
$cliente3->setId($id);
$endereco3->setCliente($cliente3);

echo $enderecoDB->persist($endereco3)->flush();
