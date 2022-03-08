<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP - str_word_count</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $nome = "Eu vou estudar PHP";

            $tot = str_word_count($nome,0);// conta o total de palavras de uma string

            echo "A frase ($nome) possui $tot palavras.";
            
            
            

        ?>
    </div>    
</body>
</html>