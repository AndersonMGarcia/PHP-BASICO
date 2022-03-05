<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Números Primos</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        h1 { font: 20pt Arial; }
        h2 { font: 18pt Arial; }
  </style>
</head>
<body>
    <div>
        <?php
            $num = isset($_GET["num"]) ? $_GET["num"] : 1;

            echo "<h1>Analisando o número $num</h1><br>";
            

            $mult = 0;

            if ($num %2 != 0){                
                echo "Valores múltiplos: ";
                

                for ($i = 1; $i <= $num; $i ++){

                    if ($num % $i == 0){
                        $mult ++;
                        echo "$i   ";                        
                    }
                }
                echo "<br>Total de múltiplos: $mult<br>";
                echo "<strong>RESULTADO: $num</strong> <span class='focos'>É PRIMO!</span><br>";
                
            }else{
                echo "Não é um número primo!";
                
            }
            
        ?>
        <hr><br>
        <a href="03-primo.html" class="botao">Voltar</a>
    </div>    
</body>
</html>