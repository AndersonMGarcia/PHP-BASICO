<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <?php
        $preco = 1500;
    
        echo "O preço do produto é R$ ". number_format($preco,2,',','.');

        //$preco = $preco + ($preco * 10/100);
        $preco += ($preco * 10/100) ;

        echo "<br>Preço com 10% de aumento: R$". number_format($preco,2,',','.');
    ?>
</body>
</html>
