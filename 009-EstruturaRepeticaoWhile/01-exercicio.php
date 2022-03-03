<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição While</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $c = 10;
            $g = 1;
            
            while ($g <= 10){
                echo ("G = $g <br>");
                $g ++;
            }
            echo "===============================<br>";
            while($c >= 1)
            {
                echo("C = $c <br>");
                $c --;
            }
        ?>
    </div>
</body>
</html>