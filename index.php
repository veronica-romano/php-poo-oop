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
    </ul>

    <?php
    require_once "src/Cliente.php";
    require_once "src/PessoaFisica.php";
    require_once "src/PessoaJuridica.php";

    $clientePF = new PessoaFisica;
    $clientePJ = new PessoaJuridica;

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




    
    ?>

    <pre><?=  var_dump($clientePF) ?> </pre>
    <pre><?=  var_dump($clientePJ) ?> </pre>
  


</body>
</html>