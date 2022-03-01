<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Incremento</title>
</head>
<body>
    <?php
        $anoAtual = 2022;        
        $anoAnterior = --$anoAtual;
        $anoPosterior = ++$anoAtual + 1;

        echo "<br>O ano atual é $anoAtual";
        echo "<br>O ano anterior é $anoAnterior";
        echo "<br>O ano posterior ao ano atual é $anoPosterior";;

    

    ?>
</body>
</html>