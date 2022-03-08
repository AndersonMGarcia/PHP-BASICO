<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP - implode</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            
            $vetor = ["Curso", "em", "Vídeo"];

            $texto = implode(" ",$vetor);
            $texto2 = join(" ", $vetor);
            echo "Função implode = ".$texto."<br>";
            echo "Função join = ".$texto2;
            
            
            

        ?>
    </div>    
</body>
</html>