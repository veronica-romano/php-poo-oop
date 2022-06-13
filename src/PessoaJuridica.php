<?php
require_once "Cliente.php";
class PessoaJuridica extends Cliente{

    private string $cnpj;
    private int $anoFundacao;
    private string $nomeFantasia;

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


    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }
    public function setNomeFantasia(string $nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }
}



?>