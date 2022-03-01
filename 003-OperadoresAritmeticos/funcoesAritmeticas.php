<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas</title>
    
</head>
<body>
    <h1>Funções Aritméticas</h1>

    <div>
        <?php
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];

            echo "Valores Recebidos: $v1 e $v2";
            echo "<br>-------------------------";
            echo "<br>O valor absoluto de $v2 é: ".abs($v2);
            echo "<br>O valor de $v1<sup> $v2</sup> é: ". pow($v1,$v2);
            echo "<br>A raiz de $v1 é: ". sqrt($v1);
            echo "<br>A raiz de $v2 é: ". sqrt($v2);
            echo "<br>O valor de $v2 é: ". round($v2);

            // round() => arredondamentos
            // ceil()  => arredondamentos sempre para cima
            // floor() => arredondamentos sempre para baixo

            echo "<br>A parte inteira de $v2 é: ". intval($v2);

            echo "<br>O valor de $v1 em moeda é: R$ " .number_format($v1,2,",",".");
        ?>

    </div>
</body>
</html>