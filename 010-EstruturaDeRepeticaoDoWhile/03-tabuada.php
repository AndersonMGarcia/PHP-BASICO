<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada usando Do While</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <form action="" method="get">
            <label for="num">Número: </label>
            <select name="num" id="num">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <input type="submit" value="Exibir Tabuada" class="botao">
        </form>
        <hr>
        <?php
            $num = isset($_GET["num"]) ? $_GET["num"] : 0;
            $a = 0;
            
            do {
                $res = ($num * $a);  
                echo "$num x $a = <span class='foco'>$res</span> <br>";
                echo "-----------------<br>";
                $a ++;
            } while ($a <= 10);
        ?>
    </div>    
</body>
</html>