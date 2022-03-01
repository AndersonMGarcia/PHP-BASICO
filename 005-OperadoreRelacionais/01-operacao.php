<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
</head>
<body>
    <?php
        $n1 = 100;
        $n2 = 50;

        $tipo = "s";

        echo "Os valores passados foram $n1 e $n2";

        $resultado = ($tipo === "s")? $n1 + $n2 : $n1 * $n2;

        echo "<br>".$resultado;
    ?>


    
</body>
</html>