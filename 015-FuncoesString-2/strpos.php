<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP - strpos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $frase = "Estou aprendendo PHP";
            $pos = strpos($frase, "PHP");//mostra a posíçao da string - "PHP"...

            echo "$frase <br>A string PHP foi encontrada na posição $pos";
        ?>
    </div>    
</body>
</html>