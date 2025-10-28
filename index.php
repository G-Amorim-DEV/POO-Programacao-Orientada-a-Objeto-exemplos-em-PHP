<?php
require_once"src/Cliente.php";

//Criando um objeto e usando método construtor ()
$clienteA = new Cliente("Mônica", 30, "monica@gmail.com");

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

    <h1>Visualizando  estrutura dos objetos</h1>

   <div>
    <h2>Nome: <?=$clienteA->getNome()?></h2>
    <h2>Idade: <?=$clienteA->getIdade()?></h2>
    <h2>E-mail: <?=$clienteA->getEmail()?></h2>
    <h2>Telefone: <?=$clienteA->getTelefone() ?? "Não informado"?></h2>
   </div>

 
    
</body>
</html>