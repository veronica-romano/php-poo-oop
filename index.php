<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Exemplo 1</title>
</head>
<body>
    <h1>PHP POO Exemplo 1</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Criação da classe</li>
        <li>Importação do arquivo de classe</li>
        <li>Criação dos objetos</li>
    </ul>

    <?php
    require_once "src/Cliente.php";

    $clienteA = new Cliente;
    $clienteB = new Cliente;
    
    ?>

    <pre> <?= var_dump($clienteA, $clienteB)?> </pre>


</body>
</html>