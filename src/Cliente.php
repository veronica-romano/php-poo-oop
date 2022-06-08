<?php


class Cliente{
    public string $nome;
    public string $email;
    public string $senha;
    public array $telefones;

    //método construtor
    public function __construct( string $nome, string $email)
    {
        // this é uma variável especial que referencia a classe atualmente manipulada.´
        // o __construct é chamado quando você cria um objeto, função de execução automática
        
        $this->nome = $nome;
        $this->email = $email;
    }
}
?>