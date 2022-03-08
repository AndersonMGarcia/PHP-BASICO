<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP - printr</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php

            $v = [4,8,3];
            echo "Mostrando os valores com printr:<br><br>";
            print_r($v);// usado para testes - vai mostrar os valores do vetor, indices, etc
            echo "<br>";
            $v2 = array (3,7,"Anderson",5,9,1);
            
            print_r($v2);

            echo "<hr>Mostrando os valores com var_dump<br>";
            var_dump($v2);
            echo "<hr>Mostrando os valores com var_export<br><br>";
            var_export($v2);
        ?>        
    </div>
</body>
</html>