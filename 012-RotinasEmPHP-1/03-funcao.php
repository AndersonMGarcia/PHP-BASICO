<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas em PHP - Funções</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            function soma(){
                $p = func_get_args();
                $total = func_num_args();
                $soma = 0;

                for ($i = 0; $i < $total; $i ++){
                    $soma = $soma + $p[$i];
                }                
                return $soma;
            }
            
            echo "<br>A soma dos valores = ".soma(10,5,7,10,5,84);

        ?>
    </div>    
</body>
</html>