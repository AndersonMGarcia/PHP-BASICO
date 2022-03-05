<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP - ord</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $letra1 = "F";// Retorna o código ASCII de um caractere passado como parâmetro.
            $letra2 = "f";

            echo "<br>O código da letra F = ".ord($letra1);
            echo "<br>O código da letra f = ".ord($letra2);

        ?>
    </div>    
</body>
</html>