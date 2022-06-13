<?php

//classes abstratas não podem ser instanciadas. Ou seja, não é possível criar um objeto/variável a partir dessa classe
abstract class Cliente{
    private string $nome;
    private string $email;
    private string $senha;
    private string $situacao = "a definir ";

    public function getNome():string{
        return $this->nome;
    }
    //                             parâmetro  
    public function setNome(string $nome){
        $this->nome            =     $nome;
        // propriedade/atributo
    }

    public function getEmail():string{
        return $this->email;
    }
    public function setEmail(string $email){
        $this->email = $email;
    }

    public function getSenha():string{
        return $this->senha;
    }
    public function setSenha(string $senha){
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    protected function getSituacao(): string
    {
        return $this->situacao;
    }
    protected function setSituacao(string $situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }
}
?>