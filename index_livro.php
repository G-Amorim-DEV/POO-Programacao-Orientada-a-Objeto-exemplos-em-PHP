<?php
// Certifique-se de que o arquivo Livro.php foi corrigido para usar $mensagens
require_once "src/Livro.php";

$livroA = new Livro("A Batalha do Apocalipse", "Eduardo Spohr", 560);
$livroB = new Livro("O Código Da Vinci", "Dan Brown", 430);
$livroC = new Livro("PHP do Zero", "Algum Professor", 250);
$livroD = new Livro("123", "Noé dá Sua Conta", );
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Livros</title>
    <link rel="stylesheet" href="css/livro.css">
</head>

<body>

    <?php
    // Criamos um array de livros para facilitar a iteração e evitar repetição de código
    $livros = [
        'A' => $livroA,
        'B' => $livroB,
        'C' => $livroC,
        'D' => $livroD
    ];
    ?>

    <?php foreach ($livros as $letra => $livro): ?>

        <div class="livros" data-titulo="<?= $livro->getTitulo() ?>">
            <h3>Livro <?= $letra ?>: <?= $livro->getTitulo() ?></h3>

            <?php foreach ($livro->mensagens as $mensagem): ?>
                <?= $mensagem ?>
            <?php endforeach; ?>

            <p><b>Autor:</b> <?= $livro->getAutor() ?></p>

            <p><b>Páginas:</b> <?= $livro->getQuantidadeDePaginas() ?? 'N/A' ?></p>

        </div>

    <?php endforeach; ?>



</body>

</html>