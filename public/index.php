<?php

include '../autoloader.php';

include 'clientes.php';

$order = key_exists('order', $_GET)? $_GET['order'] : 'ASC';

if ( $order == 'DESC' ){
    krsort($clientes);
}else{
    ksort($clientes);
}

$pag = key_exists('pag', $_GET)? $_GET['pag'] : 'lista';
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>POO</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="header clearfix">
        <h3 class="text-muted">POO com PHP</h3>
    </div>

    <div class="jumbotron">
        <h1>Clientes</h1>
        <p class="lead">Exercício de POO em PHP.</p>
    </div>

    <div class="row marketing">

        <?php include_once 'cliente-'.$pag.'.php'; ?>

    </div>

    <footer class="footer">
        <p>&copy; 2016 @adaoex.</p>
    </footer>

</div> <!-- /container -->

</body>
</html>