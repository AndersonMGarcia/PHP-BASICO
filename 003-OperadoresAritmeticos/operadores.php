<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Operadores Aritméticos</h1>    

    <div>
        <?php
            $n1 = 10;
            $n2 = 84;
            $media = ($n1 + $n2) / 2;
            
            echo "Valores das Variáveis:";
            echo "<br>".'$n1 = '.$n1;
            echo "<br>".'$n2 = '.$n2;
            echo "<br>----------------------";
            echo "<br>A soma = ".($n1 + $n2);
            echo "<br>A subtração = ".($n1 - $n2);
            echo "<br>A multiplicação = ".($n1 * $n2);
            echo "<br>A divisão = ".($n1 / $n2);
            echo "<br>A media = ".$media;

            echo "<br>----------------------";
            echo "<br><br>Valores recebidos:<br>";
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];

            echo "<br>A soma = ".($n1 + $n2);
            echo "<br>A subtração = ".($n1 - $n2);
            echo "<br>A multiplicação = ".($n1 * $n2);
            echo "<br>A divisão = ".($n1 / $n2);
            echo "<br>A media = ".$media;

            
        ?>
        
    </div>
</body>
</html>