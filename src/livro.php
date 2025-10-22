<?php

class Livro {

    public string $titulo;
    public string $autor;
    public ?int $quantidade_de_paginas;


    public function __construct(
        string $tituloDoLivro,
        string $nomeDoAutor,
        ?int $quantidaDePaginas = null)
    { 
       
        $this -> titulo = $tituloDoLivro;
        $this -> autor = $nomeDoAutor;
        $this -> quantidade_de_paginas = $quantidaDePaginas; 
    }

    public function verificarTitulo(){
        
        if (mb_strlen($this->titulo) <= 3){ 
           echo "<p style='color:red;'> Título não pode ter menos do que 3 letras </p>";
        } else{
            echo "<p> Título do Livro é: {$this -> titulo} </p>";
        }
    }


    public function mostrarDados() {

        echo "
            <h4>Livro: </h4>
            <p><b>Titulo: </b>$this->titulo</p>
            <p><b>Autor: </b>$this->autor</p>";
            if ($this -> quantidade_de_paginas != null){
             echo "<p><b>Quantidade de Páginas:</b> $this->quantidade_de_paginas pg</p>";   
            }      

    }

}