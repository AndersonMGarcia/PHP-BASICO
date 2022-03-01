<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis Referencidas</title>
</head>
<body>
    <code style="color: red;">
        $a = 3;<br>
        $b = $a;<br>
        $b += 5;<br>
    </code>
    <?php
        $a = 3;
        $b = $a;
        $b += 5;
        
        echo "<br><br>".'A variável $a vale '.$a;
        echo "<br>".'A variável $b vale '.$b;

        //usando referencia de variaveis: &
        ?>



        <code style="color: red;">
            <h5>Usando referência de variáveis</h5>
            
            Sa = 3;
            <br>$b = &$a; <br>
            $b += 5;  <br>   
        </code>



        <?php

        $b = &$a;
        $b += 5;
        
        echo "<br>".'A variável $a vale '.$a;
        echo "<br>".'A variável $b vale '.$b;




        
    ?>   
</body>
</html>