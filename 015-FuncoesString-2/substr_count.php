<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP - strtolower</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";

            
            $cont = substr_count($frase, "PHP");// retorna a qtd de strings dentro da frase -   php

            echo $cont;
        ?>
    </div>    
</body>
</html>