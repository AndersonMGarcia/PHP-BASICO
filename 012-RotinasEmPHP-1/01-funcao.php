<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funçãoes em PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
    
        <?php
            //função que nao retorna valor
            function soma ($a, $b)   {
                $s = $a + $b;
                echo "<p>A soma vale $s</p>";
            }

            soma(3,4);
            soma(8,9);
            $x = 10; $y = 15;
            soma($x, $y);
            
            echo "<hr>";

            function somar_2($a, $b){
                $soma = $a + $b;
                return $soma;
            }

            echo "Usando a função com retorno de valor = ".somar_2(10,20);


        ?>
    </div>
</body>
</html>