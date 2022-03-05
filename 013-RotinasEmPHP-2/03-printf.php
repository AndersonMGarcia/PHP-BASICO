<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP - printf</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $p = "Leite";
            $preco = 4500;

            echo "O $p custa R$ ".number_format($preco,2,",",".");
            printf("<br>O %s custa R$ %.2f ", $p, $preco);
        ?>        
    </div>
</body>
</html>