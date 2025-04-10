<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 01</h1>
    <hr>
 
<?php
// Carregando/importando a classe
require_once "src/Cliente.php";
 
// Criando objeto/instância da Classe
$clienteA = new Cliente ();
$clienteB = new Cliente ();
 
//Atribuindo valores oara atributos
$clienteA->nome = "Alana Silva Rocha";
$clienteA->idade = 17;
$clienteA->email = "alana@gmail.com";
 
$clienteB->nome = "Clara Ruiz Igreja";
$clienteB->idade = 16;
$clienteB->email = "clara@gmail.com";
?>
 
<h2>Acessando/lendo os dados dos objetos</h2>
 
<h3>Cliente A</h3>
<div>
    <?=$clienteA->exibirDados()?>
</div>
<ul>
    <li><b>Idade:</b> <?=$clienteA->idade?></li>
    <li><b>E-mail:</b> <?=$clienteA->email?></li>
</ul>
 
<h3>Cliente B</h3>
<div>
    <?=$clienteB->exibirDados()?>
</div>
<ul>
    <li><b>Idade:</b> <?=$clienteB->idade?></li>
    <li><b>E-mail:</b> <?=$clienteB->email?></li>
</ul>
 
<h2>Testes de acesso aos recursos da classe através do objeto</h2>
 
<pre><?=var_dump($clienteA, $clienteB)?></pre>
 
 
</body>
</html>