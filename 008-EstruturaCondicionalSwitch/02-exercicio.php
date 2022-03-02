<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $dia = isset($_GET["ds"]) ? $_GET["ds"] : 0;

        switch ($dia){
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                $resultado = "Levanta e vai estudar!";
                break;
            case 7:
            case 8:
                $resultado = "Descanse pequeno gafanhoto! ";
                break;
            default:
                echo "Dia da semana inválido!";
        }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Condicional Switch</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            echo $resultado;
        ?>
        <hr><br>
        <a href="02-exercicio.html" class="botao">Voltar</a>
    </div>    
</body>
</html>