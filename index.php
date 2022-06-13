<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Exemplo 6</title>
</head>
<body>
    <h1>PHP POO Exemplo 6</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Polimorfismo</li>

        
    </ul>
    <p>Para o polimorfismo ser possível, é obrigatório que os métodos tenham a mesma assinatura.</p>
    <h3>O que é assinatura de método?</h3>
    <li>Mesmo nome;</li>
    <li>Mesma quantidade de parâmetros;</li>
    <li>Mesmo tipo de dados nos parâmetros;</li>
    <li>Mesmo tipo de retorno.</li>

    <?php
    
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
    $clientePJ->setEmail('penha@sp.senac.br');
    $clientePJ->setCnpj('3709814000783');
    $clientePJ->setSenha('abc123');
    $clientePJ->setAnoFundacao(2000);


    
    
    ?>

    <pre><?=var_dump($clientePF, $clientePJ);?></pre>

    <h3>Pessoa Física</h3>
    <p><?=$clientePF->getNome()?></p>
    <h3>Pessoa jurídica</h3>
    <p><?=$clientePJ->getNome()?></p>

    <section>
        <?=$clientePF->exibirDados()?>
    </section>

    <section>
        <?=$clientePJ->exibirDados()?>
    </section>



    
</body>
</html>