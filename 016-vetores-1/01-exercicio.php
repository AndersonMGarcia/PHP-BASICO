<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e Matrizes - parte 1</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <pre>
        <?php
            //Array
            echo "Mostrando o array(3,5,8,2,9) e incrementando 7<br>";
            $n = array(3,5,8,2,9);
            $n [] = 7;
            print_r($n);

             //range - orderna e incrementa + 14
             
            echo "<hr>";
            echo "Mostrando um array com range(7,70,14)<br>";

           
            $c = range(7,70,14);// começa em 7, termina em <= 70 e incrementa de 14 em 14
            print_r($c);

            echo "<hr>";
            echo "Mostrando um array com o foreach()<br>";

            $range = range(5,20,2);


            ?>
            <table border="1">
                <tr>
                <?php
                    foreach($range as $v){
                        echo "<td>$v</td>";
                    }
                ?>
                </tr>
            </table>


            <?php
                echo "<hr>";
                echo "Mostrando um array com chaves personalizadas<br><br>";

                $vetor = array(10 => "A", 1 => "D", 2 => "F", 37 => "L");
                $vetor[] = "K";
                print_r($vetor);
                echo "<br>Usando o comando unset para destruir o índice 2<br>";

                unset($vetor[2]);
                print_r($vetor);


                echo "<hr>";
                echo "Mostrando um array com Chaves Associativas<br><br>";

                $cadastro = array("nome" => "Anderson",
                                  "idade" => 30,
                                  "peso" => 85);

                var_dump($cadastro);

                echo "<br>";

                $cadastro["Fuma"] = "Não";

                print_r($cadastro);

                echo "<hr>";

                echo "Mostrando um array com Chaves Associativas com foreach()<br><br>";

                foreach($cadastro as $campo => $valor){
                    echo "O valor do campo $campo = $valor<br>";
                }


            ?>
            

          
        </pre>
    </div>    
</body>
</html>