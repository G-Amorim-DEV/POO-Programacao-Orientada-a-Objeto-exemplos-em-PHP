<?php
    require_once "src/Livro.php";

  
    $livroA = new Livro("A Batalha do Apocalipse", "Eduardo Spohr", 560);
    $livroB = new Livro("O Código Da Vinci", "Dan Brown", 430);
    $livroC = new Livro("PHP do Zero", "Algum Professor", 250);
    $livroD = new Livro("123", "Noé dá Sua Conta");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Livros</title>
    <link rel="stylesheet" href="css/livro.css">
</head>
<body>
    
    <div class="livros">
        <?=$livroA->mostrarDados()?>
    </div>
    <div class="livros">
        <?=$livroB->mostrarDados()?>
    </div>
    <div class="livros">
        <?=$livroC->mostrarDados()?>
    </div>
    <div class="livros">
        <?=$livroD->mostrarDados()?>
    </div>

    <h3>Verificação do Título de Livro A:</h3>
    <?=$livroA->verificarTitulo()?>

    <h3>Verificação do Título de Livro B:</h3>
    <?=$livroB->verificarTitulo()?>

    <h3>Verificação do Título de Livro C:</h3>
    <?=$livroC->verificarTitulo()?>

    <h3>Verificação do Título de Livro D:</h3>
    <?=$livroD->verificarTitulo()?>
    
</body>
</html>