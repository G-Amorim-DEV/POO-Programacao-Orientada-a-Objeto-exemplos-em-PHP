<?php

class Cliente{
    /* Atributos privados NÃO PODEM SER ACESSADOS/MODIFICADOS fora da própria classe em que estão declarado */
    private string $nome;
    private int $idade;
    private string $email;

    private ?string $telefone;


    public function __construct(
        string $valorDoNome, 
        int $valorDaIdade, 
        string $valorDoEmail, 
        ?string $ValorDoTelefone = null){

            $this -> nome = $valorDoNome;
            $this -> idade = $valorDaIdade;
            $this -> email = $valorDoEmail;
            $this -> telefone = $ValorDoTelefone;
    }

    /*     public function mostrarDados(): void {
            echo "<div>
                    <h4>$this->nome</h4>
                    <p><b>E-mail de contado:</b> $this->email</p>
                    <p><b>Idade:</b> $this->idade anos
                    </div>";
    } */

    public function getNome():string{
        return $this->nome;
    }

    public function getIdade():int{
        return $this->idade;
    }

    public function getEmail():string{
        return $this->email;
    }


}

