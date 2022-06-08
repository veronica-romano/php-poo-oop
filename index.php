<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Exemplo 3</title>
</head>
<body>
    <h1>PHP POO Exemplo 3</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Acesso direto a propriedades</li>
        <li>Atribuição de dados e leitura</li>     
    </ul>

    <?php
    require_once "src/Cliente.php";
    // criação de objetos
    $clienteA = new Cliente;
    $clienteB = new Cliente;

    // atribuindo dados às propriedades do objeto 

    $clienteA->nome = "Glauber";
    $clienteA->email = "gcantacini@gmail.com";
    $clienteA->telefones = ["+5511997370011"];
    //$clientea->senha = "111222333";

    $clienteB->nome = "Veronica";
    $clienteB->email = "vlsveronica@gmail.com";
    $clienteB->telefones = array("+5511977370011");
    //$clienteB->senha = "aaabbbccc";



    ?>

    <h2>Dados dos objetos</h2>
    <h3> <?=$clienteA->nome?> </h3>
    <p>e-mail: <?=$clienteA->email?></p>
    <p>telefones: <?=implode(" / ", $clienteA->telefones)?></p>
    <p>senha: <?=$clienteA->senha?></p>

    <h3> <?=$clienteB->nome?> </h3>
    <p>e-mail: <?=$clienteB->email?></p>
    <p>telefone: <?=implode(" / ", $clienteB->telefones)?></p>
    <p>senha: <?=$clienteB->senha?></p>

    <h2>Chamando o método <code>exibirDados()</code> </h2>
    <?= $clienteA->exibirDados()?>
    <?= $clienteB->exibirDados()?>

</body>
</html>