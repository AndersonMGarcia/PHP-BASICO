<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP - strlen</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $nome = "   Anderson Molina Garcia   ";
            

            // trim()  => tira espaços do inicio e fim da string
            // ltrim() => tira espaços do lado esquerdo da string
            // rtrim() => tira espaços do lado direito da string

            $tiraEspacos = trim($nome);
            $tam = strlen($tiraEspacos);

            echo "A nome <strong>$nome</strong> possui <strong>$tam</strong> caracteres contando com os espaços em branco";
        ?>
    </div>    
</body>
</html>