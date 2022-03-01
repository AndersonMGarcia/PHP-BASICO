<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis de variáveis</title>
</head>
<body>
    <code style="color: red;">
        $site = "cursoemvideo";<br>
        $$site = "cursoPHP";<br>    
        
        echo $site;<br>
        echo $cursoemvideo; //$$site criou a variavel cursoemvideo
        <br><br>
    </code>    

    <?php
        $site = "cursoemvideo";
        $$site = "cursoPHP";    
        
        echo 'Apresentando o valor da varíavel $site = '.$site;
        echo "<br>".'Apresentando o valor da variável $cursoemvideo = '.$cursoemvideo;
    ?>

</body>
</html>