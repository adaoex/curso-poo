<?php

include_once 'ICliente.php';
include_once 'ClientePJ.php';
include_once 'ClientePF.php';
include_once 'IEndereco.php';
include_once 'Endereco.php';
include_once 'EnderecoCobranca.php';

$cliente1 = new ClientePF();
$endereco1 = new Endereco();
$endereco1->setLogradouro("Log 1")->setBairro("Bairo 1")->setCidade("Cid 1")->setCep(70)->setUf("DF");
$cliente1->setCpf(11)->setNome("João")->setRg(1)->addEndereco($endereco1)->setGrauImportancia(2);

$cliente2 = new ClientePF();
$endereco2 = new Endereco();
$endereco2_cob = new EnderecoCobranca();
$endereco2->setLogradouro("Log 2")->setBairro("Bairro")->setCidade("Cid")->setCep(70)->setUf("GO");
$endereco2_cob->setLogradouro("Log Cob")->setBairro("Bairro")->setCidade("Cid")->setCep(70)->setUf("GO");
$cliente2->setCpf(12)->setNome("João")->setRg(1)
    ->addEndereco($endereco2)->addEndereco($endereco2_cob)->setGrauImportancia(3);

$cliente3 = new ClientePJ();
$endereco3 = new Endereco();
$endereco3_cob = new EnderecoCobranca();
$endereco3->setLogradouro("Log 3")->setBairro("Bairro")->setCidade("Cid")->setCep(70)->setUf("GO");
$endereco3_cob->setLogradouro("Log Cob")->setBairro("Bairro")->setCidade("Cid")->setCep(70)->setUf("GO");
$cliente3->setCnpj(1313)->setNome("Industria A")->addEndereco($endereco3)
    ->addEndereco($endereco3_cob)->setGrauImportancia(4);

$cliente4 = new ClientePJ();
$endereco4 = new Endereco();
$endereco4->setLogradouro("Log 4")->setBairro("Bairro 4")->setCidade("Cid 5")->setCep(70)->setUf("DF");
$cliente4->setCnpj(14)->setNome("Fabrica B")->addEndereco($endereco4)->setGrauImportancia(2);

$cliente5 = new ClientePF();
$endereco5 = new Endereco();
$endereco5->setLogradouro("Log 1")->setBairro("Bairo 1")->setCidade("Cid 1")->setCep(70)->setUf("DF");
$cliente5->setCpf(11)->setNome("João")->setRg(1)->addEndereco($endereco5)->setGrauImportancia(2);

$cliente6 = new ClientePF();
$endereco6 = new Endereco();
$endereco6->setLogradouro("Log 5")->setBairro("Bairro 4")->setCidade("Cid 5")->setCep(70)->setUf("DF");
$cliente6->setCpf(15)->setNome("João")->setRg(1)->addEndereco( $endereco6)->setGrauImportancia(5);


$cliente7 = new ClientePF();
$endereco7 = new Endereco();
$endereco7_cob = new EnderecoCobranca();
$endereco7->setLogradouro("Log 2")->setBairro("Bairro")->setCidade("Cid")->setCep(70)->setUf("GO");
$endereco7_cob->setLogradouro("Log Cob")->setBairro("Bairro")->setCidade("Cid")->setCep(70)->setUf("GO");
$cliente7->setCpf(12)->setNome("João")->setRg(1)->addEndereco( $endereco7)
    ->addEndereco($endereco7_cob)->setGrauImportancia(3);

$cliente8 = new ClientePF();
$endereco8 = new Endereco();
$endereco8_cob = new EnderecoCobranca();
$endereco8->setLogradouro("Log 3")->setBairro("Bairro")->setCidade("Cid")->setCep(70)->setUf("GO");
$endereco8_cob->setLogradouro("Log Cob")->setBairro("Bairro")->setCidade("Cid")->setCep(70)->setUf("GO");
$cliente8->setCpf(13)->setNome("João")->setRg(1)->addEndereco($endereco8)
    ->addEndereco($endereco8_cob)->setGrauImportancia(4);

$cliente9 = new ClientePF();
$endereco9 = new Endereco();
$endereco9->setLogradouro("Log 4")->setBairro("Bairro 4")->setCidade("Cid 5")->setCep(70)->setUf("DF");
$cliente9->setCpf(14)->setNome("João")->setRg(1)->addEndereco($endereco9)->setGrauImportancia(2);

$cliente10 = new ClientePF();
$endereco10 = new Endereco();
$endereco10->setLogradouro("Log 5")->setBairro("Bairro 4")->setCidade("Cid 5")->setCep(70)->setUf("DF");
$cliente10->setCpf(15)->setNome("João")->setRg(1)->addEndereco($endereco10)->setGrauImportancia(5);

$clientes = [
    $cliente1,$cliente2,$cliente3,$cliente4,$cliente5,
    $cliente6,$cliente7,$cliente8,$cliente9,$cliente10,
];
