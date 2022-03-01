<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php
        $n1 = isset($_GET["n1"])?$_GET["n1"]:"Nota inválida";
        $n2 = isset($_GET["n2"])?$_GET["n2"]:"Nota inválida";

        $media = ($n1 + $n2)/2;

        if ($n1 == ""){
           // echo "Digite o valor da primeira nota";
            header("Location: 03-exercicio.html");
            
        }else if ($n2 == ""){
          //  echo "Digite o valor da segunda nota";
            header("Location: 03-exercicio.html");
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
            



            echo "Valor da primeira nota: $n1 <br>";
            echo "Valor da segunda  nota: $n2 <br>";
            echo "Valor da média: $media<br><br>";
            if ($media <= 5){
                echo "Você foi REPROVADO!";
            }elseif($media > 5 && $media < 7){
                echo "Você está de RECUPERAÇÃO";
            }else{
                echo "Você foi APROVADO!";
            }

        ?>
        <hr><br>
        <a href="03-exercicio.html">Voltar</a>
    </div>
</body>
</html>