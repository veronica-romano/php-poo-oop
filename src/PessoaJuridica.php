<?php
require_once "Cliente.php";
class PessoaJuridica extends Cliente{

    private string $cnpj;
    private int $anoFundacao;
    private string $nome;

    public function __construct(){
        $this->setSituacao('verificar');
    }

    public function getCnpj(): string
    {
        return $this->cnpj;
    }
    public function setCnpj(string $cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    public function getAnoFundacao(): int
    {
        return $this->anoFundacao;
    }
    public function setAnoFundacao(int $anoFundacao)
    {
        $this->anoFundacao = $anoFundacao;

        return $this;
    }


    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $nome)
    {
        $this->nome = "Empresa: ".$nome;

        return $this;
    }

    public function exibirDados(){
        echo "<h3>".$this->getNome()."</h3>";
        echo "<p>".$this->cnpj."</p>";
        echo "<p>".$this->anoFundacao."</p>";
        echo "<p>".$this->getSituacao()."</p>";
    }

}



?>