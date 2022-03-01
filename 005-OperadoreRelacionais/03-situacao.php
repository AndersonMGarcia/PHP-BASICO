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
        $n1 = 10;
        $n2 = 1;
        $m = ($n1 + $n2) / 2;

        echo "A média entre nota1 e nota2 = $m" ;

        $sit = ($m < 6)? "REPROVADO": "APROVADO";

        echo "<br>O aluno foi $sit";



        
    ?>


    
</body>
</html>;