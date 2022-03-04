<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição Do While</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <form action="01-exercicio.php" method="get">
            <label for="num">Digite um número para ver a sequência: </label>
            <input type="number" name="num" id="num" min="1" style="width: 100px;">
            <input type="submit" value="Gerar Sequência" class="botao">
            <hr>
        </form>

        <?php         
            $c = 1;
            $seq = isset($_GET["num"]) ? $_GET["num"] : 0;

            if ($seq <= 0 || $seq == null){
                $c = null;
            }

            do {
                echo "$c ";
                $c ++;
            } while ($c <= $seq);
       
        ?>
        
    </div>   
</body>
</html>