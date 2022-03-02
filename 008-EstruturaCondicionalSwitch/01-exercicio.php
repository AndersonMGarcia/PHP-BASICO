<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $num = isset($_GET["num"]) ? $_GET["num"] : 0;
        $operador = isset($_GET["oper"]) ? $_GET["oper"]: 1;

        if ($num <= 0){
            header("Location: 01-exercicio.html");
        }

        switch($operador){
            case 1:
                $result = $num * 2;
                break;
            case 2:
                $result = pow($num,3);
                break;
            case 3:
                $result = sqrt($num);
            
        }

    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição Switch</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            echo "O número solicitado foi <span class='foco'>".number_format($num,0,",",".")."</span> <br>";
            echo "O resultado da operação solicitada foi <span class='foco'>".number_format($result,0,",",".")."</span>";
        ?>
        <hr><br>
        <a href="01-exercicio.html" class="botao">Voltar</a>
    </div>    
</body>
</html>