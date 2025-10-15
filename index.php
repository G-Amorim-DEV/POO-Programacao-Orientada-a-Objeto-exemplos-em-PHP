<?php

    require_once "src/Cliente.php";


    //Criando objetos (ou instâncias) à partir da classe
    $clienteA = new Cliente();
    $clienteB = new Cliente();

    //Atribuindo valores ao objeto $clienteA
    $clienteA->nome = "Mônica";
    $clienteA->idade = 25;
    $clienteA->email = "monica@gmail.com";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos</title>
</head>
<body>

    <h1>Exemplos de PHP com POO</h1>
    <hr>

    <h2>Trabalhando com classes e objetos</h2>

    <h3>Visualizando a estrutura dos objetos</h3>

    <pre><?=var_dump($clienteA, $clienteB)?></pre>


    
</body>
</html>