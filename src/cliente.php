<?php

class Cliente{
    public string $nome;
    public int $idade;
    public string $email;

    //Telefone é opcional, ou seja, caso não seja informado ficará valendo null
    public ?string $telefone;

    /* Método construtor: responsável por 'construir
    um objeto COM  */
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

        public function mostrarDados(): void {
            echo "<div>
                    <h4>$this->nome</h4>
                    <p><b>E-mail de contado:</b> $this->email</p>
                    <p><b>Idade:</b> $this->idade anos
                    </div>";
    }


}

