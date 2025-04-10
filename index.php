<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 02</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 02</h1>
    <hr>
 
<?php
// Carregando/importando a classe
require_once "src/Cliente.php";
 
// Criando objeto/instância da Classe
$clienteA = new Cliente ();
$clienteB = new Cliente ();
 
//Atribuindo valores oara atributos
$clienteA->setNome("Alana Silva Rocha");
$clienteA->setIdade(17);
$clienteA->setEmail( "alana@gmail.com");
 
$clienteB->setNome("Clara Ruiz Igreja");
$clienteB->setIdade(16);
$clienteB->setEmail("clara@gmail.com");
?>
 
<h2>Acessando/lendo os dados dos objetos</h2>
 

<ul>
    <li><b>E-mail:</b> <?=$clienteB->getNome()?></li>
    <li><b>Idade:</b> <?=$clienteA->getIdade()?></li>
    <li><b>E-mail:</b> <?=$clienteA->getEmail()?></li>
</ul>
 

<ul>
    <li><b>E-mail:</b> <?=$clienteB->getNome()?></li>
    <li><b>Idade:</b> <?=$clienteB->getIdade()?></li>
    <li><b>E-mail:</b> <?=$clienteB->getEmail()?></li>
</ul>
 
<h2>Testes de acesso aos recursos da classe através do objeto</h2>
 
<pre><?=var_dump($clienteA, $clienteB)?></pre>
 
 
</body>
</html>