<?php
require_once "PessoaJuridica.php";

// a final class não permite herança
final class Mei extends PessoaJuridica{
    private string $AreaDeAtuacao;
    

    public function getAreaDeAtuacao(): string
    {
        return $this->AreaDeAtuacao;
    }

    public function setAreaDeAtuacao(string $AreaDeAtuacao): self
    {
        $this->AreaDeAtuacao = $AreaDeAtuacao;

        return $this;
    }
}


?>