<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Exemplo 4</title>
</head>
<body>
    <h1>PHP POO Exemplo 4</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Encapsulamento</li>
        <li>Modificadores de visibilidade</li>  
        <li>Métodos de acesso getters(leitura) e setters(definição)</li>   
    </ul>

    <?php
    require_once "src/Cliente.php";
    // criação de objetos
    $clienteA = new Cliente;
    $clienteB = new Cliente;

    // atribuindo dados via setters

    $clienteA->setNome("Veronica");
    $clienteA->setEmail("vlsveronica@gmail.com");
    $clienteA->setSenha("aaabbbccc");


    $clienteB->setNome("Glauber");
    $clienteB->setEmail("gcantacini@gmail.com");
    $clienteB->setSenha("111222333");
    
 



    ?>

    <h2>Dados dos objetos (leitura via getters)</h2>
    <h3> <?=$clienteA->getNome()?> </h3>
    <p>e-mail: <?=$clienteA->getEmail()?></p>
    <p>senha: <?=$clienteA->getSenha()?></p>


    <h3> <?=$clienteB->getNome()?> </h3>
    <p>e-mail: <?=$clienteB->getEmail()?></p>
    <p>senha: <?=$clienteB->getSenha()?></p>


</body>
</html>