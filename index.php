<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Exemplo 7</title>
</head>
<body>
    <h1>PHP POO Exemplo 7</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Propriedades e métodos estáticos</li> 
    </ul>
    <p>Acesso a classe sem criar objeto</p>
    

    <?php
    
    require_once "src/PessoaFisica.php";

     $clientePF = new PessoaFisica;
   

     $clientePF->setNome('Veronica');
     $clientePF->setIdade(28); 



    //Acessando e atribuindo uma propriedade estática
    PessoaFisica::$cidade = "São Paulo";
    echo PessoaFisica::$cidade;
    
    ?>

    <p><?=$clientePF->getNome()?></p>
    <p><?=$clientePF->getIdade()?></p>
    <p>Tipo de atendimento:</p>
    <p><?=PessoaFisica::verificaIdade($clientePF->getIdade()) ?></p>



    
</body>
</html>