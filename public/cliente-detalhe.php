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
    <div class="col-md-2">Nome:</div>
    <div class="col-md-4"><?php echo $cliente->getNome(); ?></div>
</div>
<?php if ( $cliente instanceof ClientePF ) : ?>
<div class="row">
    <div class="col-md-2">CPF:</div>
    <div class="col-md-4"><?php echo $cliente->getCpf(); ?></div>
</div>
<div class="row">
    <div class="col-md-2">RG:</div>
    <div class="col-md-4"><?php echo $cliente->getRg(); ?></div>
</div>
<?php endif; ?>
<?php if ( $cliente instanceof ClientePJ) : ?>
    <div class="row">
        <div class="col-md-2">CPF:</div>
        <div class="col-md-4"><?php echo $cliente->getCnpj(); ?></div>
    </div>
<?php endif; ?>

<div class="row">
    <?php foreach ($cliente->getEnderecos() as $k => $endereco ) : ?>
    <div class="col-md-2">Endereço <?php echo $k; ?> :</div>
    <div class="col-md-4">
        <?php echo $endereco->getLogradouro(); ?>,
        <?php echo $endereco->getBairro(); ?>,
        <?php echo $endereco->getCidade(); ?>-<?php echo $endereco->getUf(); ?>.
        CEP: <?php echo $endereco->getCep(); ?>
    </div>
    <?php endforeach; ?>
</div>

<br/><br/>