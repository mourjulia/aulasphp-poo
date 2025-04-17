<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 05</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 05</h1>
    <hr>

<?php

require_once "src/Enums/Situacao.php"; // Enum
require_once "src/Models/Cliente.php"; // Superclasse
require_once "src/Models/PessoaFisica.php"; // Subclasse
require_once "src/Models/PessoaJuridica.php"; // Subclasse


$clientePF = new PessoaFisica("Julia", "julia@gmail.com", 17, "123.456.789-00");
$clientePJ = new PessoaJuridica("João Pedro", "joao@tabajara.com", "32.789.5555/000-1", 2019, "Corporação Tabajara");
?>

    <h2>Relatórios</h2>

    <h3>PF</h3>
    <?=$clientePF->relatorio()?>

    <h3>PJ</h3>
    <?=$clientePJ->relatorio()?>

</body>
</html>