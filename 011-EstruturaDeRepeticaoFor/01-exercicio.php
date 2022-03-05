<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição For</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            for($i = 0; $i <= 10; $i++){
                echo "$i  ";
            }
            echo"<hr>";
            for($i = 10; $i >= 0; $i --){
                echo "$i  ";
            }
            echo"<hr>";
            for($i = 0; $i <= 100; $i += 5){
                echo "$i  ";
            }
            echo"<hr>";
            for($i = 20; $i >= 0; $i -= 2){
                echo "$i  ";
            }
            echo"<hr>";
        ?>
    </div>
</body>
</html>