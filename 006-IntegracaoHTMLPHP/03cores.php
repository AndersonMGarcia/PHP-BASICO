<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $txt = isset($_GET['t'])? $_GET['t']: "Texto Genérico";
        $tam = isset($_GET['tam'])? $_GET['tam']: "12pt";
        $cor = isset($_GET['cor'])? $_GET['cor']: "#000000";
    
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração HTML5 com PHP</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
            text-transform: lowercase;
        }

        
    </style>
</head>
<body>
    <div>
        <?php
            echo "<span class='texto'>$txt</span>";
        ?>

        <hr><br>

        <a href="03-ex.html">Voltar</a>

    </div>    
</body>
</html>