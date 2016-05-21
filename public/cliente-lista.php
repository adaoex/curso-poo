<table class="table table-striped" >
    <tr>
        <th>
            <a title="Ordenar" href="?order=<?php echo ($order=='ASC'?'DESC':'ASC'); ?>" > # </a>
        </th>
        <th>Nome</th>
        <th>CPF/CNPJ</th>
        <th>Tipo</th>
    </tr>
    <?php foreach($clientes as $k => $cliente ) : ?>
        <tr>
            <td><?php echo $cliente->getId(); ?></td>
            <td>
                <a href="?pag=detalhe&idx=<?php echo $cliente->getId(); ?>&tipo=<?php echo ($cliente instanceof Poo\Cliente\Tipos\ClientePJ ? 'pj': 'pf')?>">
                <?php echo $cliente->getNome(); ?>
                </a>
            </td>
            <td><?php echo ($cliente instanceof Poo\Cliente\Tipos\ClientePJ ? $cliente->getCnpj(): $cliente->getCpf() ); ?></td>
            <td><?php echo ($cliente instanceof Poo\Cliente\Tipos\ClientePJ ? "Pessoa Jurídica":"Pessoa Física"); ?></td>
        </tr>
    <?php endforeach; ?>
</table>