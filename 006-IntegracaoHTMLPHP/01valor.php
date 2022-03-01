<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração HTML com PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $valor = $_GET['v'];
            $rq = sqrt($valor);

            echo "A raiz quadrada de $valor = ".number_format($rq,2);

        ?>
        <hr><br>
        <a href="01-ex.html">Voltar</a>
        
    </div>    
</body>
</html>