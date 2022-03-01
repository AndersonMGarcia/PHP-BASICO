<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $ano = isset($_GET["ano"])?$_GET["ano"]:"Ano inválido!";
        $idade = date("Y") - $ano;

        if ($ano <= 0){          

            header("Location: 02-exercicio.html");
        }

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
            echo "Você nasceu em $ano e terá $idade anos. <br>";

           if ($idade < 16) {

               $tipoVoto = "não vota";

           }else if(($idade >= 16 && $idade < 18) || ($idade > 65)){

                $tipoVoto = "voto opcional";

           }else{
               
               $tipoVoto = "voto obrigatório";
           }

           echo "Para essa idade: $tipoVoto";

        ?>
        <hr><br>
        <a href="02-exercicio.html">Voltar</a>
    </div>    
</body>
</html>