<table class="table table-striped" >
    <tr>
        <th>
            <a title="Ordenar" href="?order=<?php echo ($order=='ASC'?'DESC':'ASC'); ?>" > # </a>
        </th>
        <th>Nome</th>
        <th>CPF</th>
        <th>RG</th>
        <th>Endereço</th>
    </tr>
    <?php foreach($clientes as $k => $cliente ) : ?>
        <tr>
            <td><?php echo $k; ?></td>
            <td>
                <a href="?pag=detalhe&idx=<?php echo $k; ?>">
                <?php echo $cliente->nome; ?>
                </a>
            </td>
            <td><?php echo $cliente->cpf; ?></td>
            <td><?php echo $cliente->rg; ?></td>
            <td><?php echo $cliente->endereco; ?></td>
        </tr>
    <?php endforeach; ?>
</table>