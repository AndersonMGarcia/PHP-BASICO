<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP - wordwrap</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $texto = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit placeat adipisci, minima voluptatibus beatae natus voluptas assumenda culpa praesentium! Fuga dolorum, quaerat atque minus dolores corrupti dolore voluptatem soluta praesentium!";

            
            
            $res = wordwrap($texto, 20,"<br>\n");// realiza quebra de linha



            echo "<h3><strong>Texto sem wordwrap</strong></h3>";
            echo $texto;
            echo "<hr>";

            echo "<h3><strong>Texto com wordwrap</strong></h3>";
            echo $res;

            
        ?>
    </div>
</body>
</html>