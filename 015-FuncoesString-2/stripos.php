<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP - stripos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $frase = "Estou aprendendo PHP";
            $pos = stripos($frase, "php");//mostra a posição da string idependente se for maisucula ou minuscula
            
            echo "$frase <br>A string foi encontrada na posição $pos";
        ?>
    </div>    
</body>
</html>