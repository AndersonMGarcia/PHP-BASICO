<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição For - Tabuada</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <form action="" method="get">
            <label for="num">Número: </label>
            <select name="num" id="num">
            <?php
                for ($i = 1; $i <= 10; $i ++){
                    echo "<option value='$i'>$i</option>";
                }
            ?>
            </select>
            <input type="submit" value="Tabuada" class="botao">
            <hr>

            <?php
                $num = isset($_GET["num"]) ? $_GET["num"] : 0;

                for ($c = 0; $c <= 10; $c ++){
                    echo "$num x $c = ".($num * $c)."<br>";
                }
            ?>
        </form>
    </div>    
</body>
</html>