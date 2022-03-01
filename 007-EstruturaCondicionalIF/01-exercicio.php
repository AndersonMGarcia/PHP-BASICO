<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php
        $ano = isset($_GET["ano"])?$_GET["ano"]:"Ano inválido";
        $idade = date("Y") - $ano;
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Condicional If</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            if ($idade >= 18){            
                $voto = "já pode votar";
                $dirigir = "já pode digirir";
            }else if ($idade >= 16 && $idade < 18){           
                $voto = "não pode votar";     
                $dirigir = "não pode digirir";           
            }
            echo "Você nasceu em $ano e tem $idade anos.<br>";
            echo "Com essa idade você $voto e também $dirigir" ;
        ?>

        <hr><br>
        <a href="01-exercicio.html">Voltar</a>
    </div>  

</body>
</html>