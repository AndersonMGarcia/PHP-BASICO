<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP - str_repeat</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $txt = str_repeat("PHP ", 5); // repete a string conforme o valor indicado

            echo "O texto gerado foi $txt";
        ?>
    </div>    
</body>
</html>