<?php


class Cliente{
    private string $nome;
    private string $email;
    private string $senha;
  
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
}
?>