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
        $a = 100;
        $b = "100";

        $r = ($a == $b)?"SIM":"NÃO";

        $res = ($a === $b)?"SIM":"NÃO";

       // echo "Os valores passados foram $a e $b";

       echo "<br>Valor de A = $a";
       echo "<br>Valor de B = $b";

        echo "<br>São variáveis A e B possuem o mesmo valor? $r";
        echo "<br>São variáveis são iguais e do mesmo tipo? $res";
    ?>


    
</body>
</html>