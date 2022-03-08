<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP - str_replace</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $frase = "Gosto de estudar <strong>Matemática</strong>. Matemática é muito legal!";

            $novaFrase = str_replace("Matemática", "PHP", $frase);

            echo "Frase antiga: [$frase]<hr>";
            echo "Nova frase substituindo matemática por PHP com a função str_replace: <br>";
           
            echo $novaFrase;
        ?>
    </div>    
</body>
</html>