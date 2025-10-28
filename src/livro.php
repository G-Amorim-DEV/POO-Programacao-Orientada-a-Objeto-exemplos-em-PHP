<?php

class Livro
{
    private string $titulo;
    private string $autor;
    private ?int $quantidade_de_paginas;


    public array $mensagens = [];


    public function __construct(
        string $tituloDoLivro,
        string $nomeDoAutor,
        ?int $quantidaDePaginas = null
    ) {

        $this->setTitulo($tituloDoLivro);
        $this->setAutor($nomeDoAutor);
        $this->setQuantidadeDePaginas($quantidaDePaginas);
    }


    public function getTitulo(): string
    {
        return $this->titulo;
    }
    public function getAutor(): string
    {
        return $this->autor;
    }
    public function getQuantidadeDePaginas(): ?int
    {
        return $this->quantidade_de_paginas;
    }


    private function setTitulo(string $tituloDoLivro): void
    {

        if (empty($tituloDoLivro) || mb_strlen($tituloDoLivro) <= 3) {

            $this->mensagens[] = "<p style='color:red;'>⚠️ Título não pode ter menos do que 3 letras</p>";
        } else {
            $this->mensagens[] = "<p>Título do Livro é: {$tituloDoLivro}</p>";
        }

        $this->titulo = $tituloDoLivro;
    }


    private function setAutor(string $nomeDoAutor): void
    {
        if (empty($nomeDoAutor)) {
            $this->mensagens[] = "<p style='color:red'>⚠️ Nome do Autor não pode ser vazio!</p>";
        } else {
            $this->autor = $nomeDoAutor;
        }
    }


    private function setQuantidadeDePaginas(?int $quantidaDePaginas): void
    {
        if ($quantidaDePaginas !== null) { 
            if ($quantidaDePaginas < 0) {
                $this->mensagens[] = "<p style='color:red'>⚠️ Quantidade de páginas não pode ser negativa!</p>";
                $this->quantidade_de_paginas = null; 
            } else {
                $this->quantidade_de_paginas = $quantidaDePaginas;
            }
        } else {
            $this->mensagens[] = "<p style='color:red'>⚠️ Quantidade de Páginas não foi informada</p>";
            $this->quantidade_de_paginas = null; 
        }
    }
}
