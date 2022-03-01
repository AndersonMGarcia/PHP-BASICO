<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração HTML5 com PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $nome = isset($_GET['nome'])? $_GET['nome'] : "[não informado]";
            $ano  = isset($_GET['ano'])? $_GET['ano'] : 0;
            $sexo = isset($_GET['sexo'])? $_GET['sexo']: "[sexo não informado]";

            $idade = date('Y') - $ano;

            echo "$nome é um(a) $sexo e tem $idade anos";

        ?>

        <hr><br>
        <a href="02-ex.html">Voltar</a>


    </div>
</body>
</html>