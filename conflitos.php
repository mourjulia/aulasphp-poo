<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conflito de Classes</title>
</head>
<body>
    <h1>Evitando conflito de classes</h1>


<?php

use Fornecedores\Pagamento;
use Prestadores\Pagamento as PrestadoresPagamento; // neste caso, com apelido 

require_once "src/Fornecedores/Pagamento.php";
require_once "src/Prestadores/Pagamento.php";

//Criando objetos para usar as classes de Pagamento
$pagamentoFornecedor = new Pagamento();
$pagamentoPrestador = new PrestadoresPagamento();
?>    

<pre><?=var_dump($pagamentoFornecedor, $pagamentoPrestador)?></pre>
</body>
</html>