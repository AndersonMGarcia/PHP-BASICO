<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas em PHP - Parte 2</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>        
        <?php
            function teste($x){
                $x += 2;
                echo "Valor de x = $x";
            }



            $a = 3;
            teste($a);
            echo "<p>O valor de A = $a</p>";

            echo "<hr>";
            echo "Passando valores por referência<br><br>";

            function teste2(&$x){
                $x += 2;
                echo "Valor de x = $x";
            }



            $a = 3;
            teste2($a);
            echo "<p>O valor de A = $a</p>";


        ?>
    </div>
</body>
</html