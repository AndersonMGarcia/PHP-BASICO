<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição Do While</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $v = isset($_GET["val"]) ? $_GET["val"] : 1;

            echo "<h4>Calculando o fatorial de $v<h4>";

            $c = $v;
            $fat = 1;

            do{
                $fat = $fat * $c;
                
                $c --;
            }while($c >= 1);
            echo "<br>Fatorial de $v = $fat";
        ?>
        <hr><br>
        <a href="02-fatorial.html" class="botao">Voltar</a>
        
    </div>   
</body>
</html>