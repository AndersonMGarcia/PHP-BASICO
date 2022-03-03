<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $ini = isset($_GET['ini']) ? $_GET['ini'] : 0;
        $fim = isset($_GET['fim']) ? $_GET['fim'] : 0; 
        $inc = isset($_GET['inc']) ? $_GET['inc'] : 0;
        $c = 0;
       
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição While</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            if ($ini <= $fim){
                while ($c <= $fim){
                    $res = $ini + $c;
                    if ($res > $fim){
                        break;
                    }
                    echo "$res"." ";
                    
                    $c = $c + $inc;
            
                }
            }elseif($ini >= $fim){
                
                while ($c <= $ini){
                    $res = $ini - $c;
                    if ($res < $fim){
                        break;
                    }
                    echo "$res"." ";
                    
                    $c = $c + $inc;
            
                }
            }
            
        ?>
        <hr><br>
        <a href="03-exercicio.html" class="botao">Voltar</a>
    </div>   
</body>
</html>