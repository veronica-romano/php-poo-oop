<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Exemplo 5</title>
</head>
<body>
    <h1>PHP POO Exemplo 5</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Herança</li>
        <li>Classe abstrata (não pode ser instanciada)</li>
        <li>Classe final (não permite herança)</li>
        <li>Métodos/propriedades protegidas (acessíveis apenas pelas subclasses)</li>
    </ul>

    <?php
    
    require_once "src/PessoaFisica.php";
    require_once "src/PessoaJuridica.php";
    require_once "src/Mei.php";

    $clientePF = new PessoaFisica;
    $clientePJ = new PessoaJuridica;
    $clienteMei = new Mei;

    $clientePF->setNome('Veronica');
    $clientePF->setEmail('vlsveronica@gmail.com');
    $clientePF->setCpf('352.966.783-88');
    $clientePF->setSenha('abc123');
    $clientePF->setIdade(28);

    $clientePJ->setNome('SERVICO NACIONAL DE APRENDIZAGEM COMERCIAL');
    $clientePJ->setNomeFantasia('SENAC PENHA');
    $clientePJ->setEmail('penha@sp.senac.br');
    $clientePJ->setCnpj('3709814000783');
    $clientePJ->setSenha('abc123');
    $clientePJ->setAnoFundacao(2000);

    $clienteMei->setNome('apoio tecnologico ltda');
    $clienteMei->setNomeFantasia('Powerslave Tech');
    $clienteMei->setEmail('tech@powerslave.br');
    $clienteMei->setCnpj('378561563123');
    $clienteMei->setSenha('123abc');
    $clienteMei->setAnoFundacao(2023);
    $clienteMei->setAreaDeAtuacao('Tecnologia');

    
    
    ?>

    <pre><?=var_dump($clienteMei, $clientePF, $clientePJ);?></pre>


    
</body>
</html>