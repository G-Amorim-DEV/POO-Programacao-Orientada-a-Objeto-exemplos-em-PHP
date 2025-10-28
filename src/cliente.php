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

            $this -> setNome($valorDoNome);
            $this -> setIdade($valorDaIdade);
            $this -> setEmail($valorDoEmail);
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

    public function getTelefone():?string{
        return $this->telefone;
    }

    /* Métodos setters: permitem acesso de escrita para definir valores de acordo com alguma regra/validação. */

    private function setNome(string $valorDoNome): void{
        /* Se nome estiver vazio */
        if(empty($valorDoNome)){
            //apresentamos uma mensagem alertando
            echo "<p style='color:red'> Nome não pode ser vazio!!!</p>";
        } else{
            //senão. pegamos o valor do nome e colocamos no atributo do objeto
            $this->nome = $valorDoNome;
        }
    }

    private function setEmail(string $valorDoEmail): void{
        /* Usamos o filter_var com a constante FILTER_VALIDATE_EMAIL
        para o PHP vertificar se o valor do e-mail informado é valido. 
        Se sim, retorna TRUE, senão, retorna FALSE*/

        $validaEmail = filter_var($valorDoEmail, FILTER_VALIDATE_EMAIL);

        // Se o e-mail não for válido
        if(!$validaEmail){
            echo "<p style= 'color:red'> E-mail Invalido!!</p>";
        } else{
            // Senão, atribui ao atributo
            $this->email = $valorDoEmail;
        }
    }

    private function setIdade( int $valorDaIdade):void{
        if($valorDaIdade < 0){
            echo "<p style='color:red'> Idade não pode ser negativa!!!</p>";
        }else{
            // Senão, atribui ao atributo
            $this->idade = $valorDaIdade;
        }
    }
}

?>