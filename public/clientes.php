<?php

$db = new \PDO('sqlite:cursopoo.db');

$pfDB = new Poo\PDO\ClientePF($db);
$pjDB = new Poo\PDO\ClientePJ($db);

$clientes_pf = $pfDB->findAll();
$clientes_pj = $pjDB->findAll();

$clientes = array_merge($clientes_pf, $clientes_pj);

/*$cliente1 = new Poo\Cliente\Tipos\ClientePF();
$endereco1 = new Poo\Endereco\Tipos\Endereco();
$endereco1->setLogradouro("Log 1")->setBairro("Bairo 1")->setCidade("Cid 1")->setCep(70)->setUf("DF");
$cliente1->setCpf(11)->setNome("João")->setRg(1)->addEndereco($endereco1)->setGrauImportancia(2);

$cliente2 = new Poo\Cliente\Tipos\ClientePF();
$endereco2 = new Poo\Endereco\Tipos\Endereco();
$endereco2_cob = new Poo\Endereco\Tipos\EnderecoCobranca();
$endereco2->setLogradouro("Log 2")->setBairro("Bairro")->setCidade("Cid")->setCep(70)->setUf("GO");
$endereco2_cob->setLogradouro("Log Cob")->setBairro("Bairro")->setCidade("Cid")->setCep(70)->setUf("GO");
$cliente2->setCpf(12)->setNome("João")->setRg(1)
    ->addEndereco($endereco2)->addEndereco($endereco2_cob)->setGrauImportancia(3);

$cliente3 = new Poo\Cliente\Tipos\ClientePJ();
$endereco3 = new Poo\Endereco\Tipos\Endereco();
$endereco3_cob = new Poo\Endereco\Tipos\EnderecoCobranca();
$endereco3->setLogradouro("Log 3")->setBairro("Bairro")->setCidade("Cid")->setCep(70)->setUf("GO");
$endereco3_cob->setLogradouro("Log Cob")->setBairro("Bairro")->setCidade("Cid")->setCep(70)->setUf("GO");
$cliente3->setCnpj(1313)->setNome("Industria A")->addEndereco($endereco3)
    ->addEndereco($endereco3_cob)->setGrauImportancia(4);

$cliente4 = new Poo\Cliente\Tipos\ClientePJ();
$endereco4 = new Poo\Endereco\Tipos\Endereco();
$endereco4->setLogradouro("Log 4")->setBairro("Bairro 4")->setCidade("Cid 5")->setCep(70)->setUf("DF");
$cliente4->setCnpj(14)->setNome("Fabrica B")->addEndereco($endereco4)->setGrauImportancia(2);

$cliente5 = new Poo\Cliente\Tipos\ClientePF();
$endereco5 = new Poo\Endereco\Tipos\Endereco();
$endereco5->setLogradouro("Log 1")->setBairro("Bairo 1")->setCidade("Cid 1")->setCep(70)->setUf("DF");
$cliente5->setCpf(11)->setNome("João")->setRg(1)->addEndereco($endereco5)->setGrauImportancia(2);

$cliente6 = new Poo\Cliente\Tipos\ClientePF();
$endereco6 = new Poo\Endereco\Tipos\Endereco();
$endereco6->setLogradouro("Log 5")->setBairro("Bairro 4")->setCidade("Cid 5")->setCep(70)->setUf("DF");
$cliente6->setCpf(15)->setNome("João")->setRg(1)->addEndereco( $endereco6)->setGrauImportancia(5);


$cliente7 = new Poo\Cliente\Tipos\ClientePF();
$endereco7 = new Poo\Endereco\Tipos\Endereco();
$endereco7_cob = new Poo\Endereco\Tipos\EnderecoCobranca();
$endereco7->setLogradouro("Log 2")->setBairro("Bairro")->setCidade("Cid")->setCep(70)->setUf("GO");
$endereco7_cob->setLogradouro("Log Cob")->setBairro("Bairro")->setCidade("Cid")->setCep(70)->setUf("GO");
$cliente7->setCpf(12)->setNome("João")->setRg(1)->addEndereco( $endereco7)
    ->addEndereco($endereco7_cob)->setGrauImportancia(3);

$cliente8 = new Poo\Cliente\Tipos\ClientePF();
$endereco8 = new Poo\Endereco\Tipos\Endereco();
$endereco8_cob = new Poo\Endereco\Tipos\EnderecoCobranca();
$endereco8->setLogradouro("Log 3")->setBairro("Bairro")->setCidade("Cid")->setCep(70)->setUf("GO");
$endereco8_cob->setLogradouro("Log Cob")->setBairro("Bairro")->setCidade("Cid")->setCep(70)->setUf("GO");
$cliente8->setCpf(13)->setNome("João")->setRg(1)->addEndereco($endereco8)
    ->addEndereco($endereco8_cob)->setGrauImportancia(4);

$cliente9 = new Poo\Cliente\Tipos\ClientePF();
$endereco9 = new Poo\Endereco\Tipos\Endereco();
$endereco9->setLogradouro("Log 4")->setBairro("Bairro 4")->setCidade("Cid 5")->setCep(70)->setUf("DF");
$cliente9->setCpf(14)->setNome("João")->setRg(1)->addEndereco($endereco9)->setGrauImportancia(2);

$cliente10 = new Poo\Cliente\Tipos\ClientePF();
$endereco10 = new Poo\Endereco\Tipos\Endereco();
$endereco10->setLogradouro("Log 5")->setBairro("Bairro 4")->setCidade("Cid 5")->setCep(70)->setUf("DF");
$cliente10->setCpf(15)->setNome("João")->setRg(1)->addEndereco($endereco10)->setGrauImportancia(5);

$clientes = [
    $cliente1,$cliente2,$cliente3,$cliente4,$cliente5,
    $cliente6,$cliente7,$cliente8,$cliente9,$cliente10,
];*/
