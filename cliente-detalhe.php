<?php
if ( ! key_exists('idx', $_GET) ){
    echo 'Indice inválido';
}
$idx = $_GET['idx'];

if ( ! key_exists($idx, $clientes) ){
    echo "Cliente inválido";
}
$cliente =  $clientes[$idx];
?>

<a href="index.php" >
    <i class="glyphicon glyphicon-arrow-left"></i>
    Voltar
</a>

<h2>Dados de Cliente</h2>

<div class="row">
    <div class="col-md-1">Nome:</div>
    <div class="col-md-5"><?php echo $cliente->nome; ?></div>
</div>
<div class="row">
    <div class="col-md-1">CPF:</div>
    <div class="col-md-5"><?php echo $cliente->cpf; ?></div>
</div>
<div class="row">
    <div class="col-md-1">RG:</div>
    <div class="col-md-5"><?php echo $cliente->rg; ?></div>
</div>
<div class="row">
    <div class="col-md-1">Endereço:</div>
    <div class="col-md-5"><?php echo $cliente->endereco; ?></div>
</div>

<br/><br/>