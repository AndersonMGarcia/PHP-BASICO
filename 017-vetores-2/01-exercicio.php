<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e Matrizes - 2</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div>
        <pre>
            <?php
                $v = array("A", "J", "M", "X", "K");

                echo "<strong>Exibindo o vetor na tela usando print_r()</strong>";
                echo "<br><br>";

                print_r($v);

                //--------------------------------------------------------------
                echo "<hr><strong>Exibindo o vetor na tela usando var_dump()</strong>";
                echo "<br><br>";

                var_dump($v);

                //--------------------------------------------------------------
                echo "<hr><strong>Exibindo o total de elementos do vetor usando count()</strong>";
                echo "<br><br>";

                echo "O vetor possui <strong>".count($v)."</strong> elementos";
            ?>
        </pre>
       
    </div>
</body>
</html>