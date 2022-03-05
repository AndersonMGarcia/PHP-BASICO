<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP - chr</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $letra = chr(67);//Retorna um caractere de acordo com seu código ASCII passado como parâmetro.

            echo "A letra de código 67 é $letra";

        ?>
    </div>    
</body>
</html>
