<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Exemplo 2</title>
</head>
<body>
    <h1>PHP POO Exemplo 2</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Criação dos Objetos</li>
        <li>Uso do método construtor</li>
        <li>uso do <code>$this</code> para acessar as propriedades</li>
        
    </ul>

    <?php
    require_once "src/Cliente.php";

    $clienteA = new Cliente('Glauber', 'gcantacini@gmail.com');
    $clienteB = new Cliente('Veronica', 'veronica.lima.silva@uni9.edu.br');
    
    ?>

    <pre> <?= var_dump($clienteA, $clienteB)?> </pre>


</body>
</html>