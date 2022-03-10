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
                echo "Mostrando o array original: <br><br>";    
                print_r($v);

                echo "Inserindo elementos no final do array: <br><br>";

                echo '$v[] = "B"';
                echo "<br><br>";

                $v[] = "B";

                print_r($v);

                //---------------------------------------------------------
                echo "<hr>";
                echo "Inserindo elementos no final do array com a função array_push(): <br><br>";

                echo 'array_push($v, "C");';
                echo "<br><br>";

                array_push($v, "C");

                print_r($v);

                //---------------------------------------------------------
                echo "<hr>";
                echo "Eliminando o último elemento do array com a função array_pop(): <br><br>";

                echo 'array_pop($v);';
                echo "<br><br>";

                array_pop($v);

                print_r($v);

                //---------------------------------------------------------
                echo "<hr>";
                echo "Inserindo um elemento no início do array com a função array_unshift(): <br><br>";

                echo 'array_unshift($v, 10);';
                echo "<br><br>";

                array_unshift($v, 10);

                print_r($v);

                echo "Note que o elemento <strong>(A)</strong> agora passa a ser o índice <strong>(1)</strong> do array";

                //---------------------------------------------------------
                echo "<hr>";
                echo "Elinimando o primeiro elemento do array com a função array_shift(): <br><br>";

                echo 'array_shift($v);';
                echo "<br><br>";

                array_shift($v);

                print_r($v);

                echo "Note que o elemento <strong>(A)</strong> agora volta a ser o índice <strong>(0)</strong> do array";

                //---------------------------------------------------------
                echo "<hr>";
                echo "Ordenando os elementos do array com a função sort(): <br><br>";

                echo 'sort($v);';
                echo "<br><br>";

                sort($v);

                print_r($v);

                $num = array(10,8,5,3,7,2,4,6,9,1);
                echo "<br>--------------------------------------------------------<br>";
                print_r($num);
                echo "<br><br>";
                echo 'sort($num);';
                echo "<br><br>";

                sort($num);

                print_r($num);

                //---------------------------------------------------------------------------
                echo "<hr>";
                echo "Ordenando os elementos do array em ordem reversa com a função rsort(): <br><br>";

                echo 'rsort($v);';
                echo '<br>rsort($num);';
                echo "<br><br>";

                rsort($v);
                rsort($num);

                print_r($v);
                print_r($num);

                //---------------------------------------------------------------------------
                echo "<hr>";
                echo "Ordenando os elementos do array com a função asort(): <br><br>";

                $n1 = array(1,12,15,30,3);

                echo 'asort($n1);';
                
                echo "<br><br>";

                print_r($n1);

                asort($n1);

                print_r($n1);

                echo "Observe que os índices tbm foram alterados...";


                //---------------------------------------------------------------------------
                echo "<hr>";
                echo "Ordenando os elementos do array de forma reversa com a função arsort(): <br><br>";

                $n2 = array("A", "D", "Z", "P", "J", "F");

                echo 'arsort($n2);';
                
                echo "<br><br>";

                print_r($n2);

                arsort($n2);

                print_r($n2);

                echo "Observe que os índices tbm foram alterados...";

                //---------------------------------------------------------------------------
                echo "<hr>";
                echo "Ordenando os indices do array com a funçao ksort(): <br><br>";

               $vetor = array(2 => "A", 5 => "J", 0 => "M", 3 => "X", 4 => "K");

                echo '$vetor = array(2 => "A", 5 => "J", 0 => "M", 3 => "X", 4 => "K")';
                
                echo "<br><br>";
                
                print_r($vetor);
                echo 'ksort($vetor)';
                echo "<br><br>";
                ksort($vetor);

                print_r($vetor);
                //---------------------------------------------------------------------------
                echo "<hr>";
                echo "Ordenando os indices do array de forma reversa com a funçao krsort(): <br><br>";

               $vetor = array(2 => "A", 5 => "J", 0 => "M", 3 => "X", 4 => "K");

                echo '$vetor = array(2 => "A", 5 => "J", 0 => "M", 3 => "X", 4 => "K")';
                
                echo "<br><br>";
                
                print_r($vetor);
                echo 'krsort($vetor)';
                echo "<br><br>";
                krsort($vetor);

                print_r($vetor);
                //-------------------------------------------------------------------------
                echo "<hr>";
                $a = 10;
                $b = 2;
                $j = $a / 2;

                for($i = 0; $i < $j; $i ++){
                    
                    if ($i % $b == 1){
                        echo $i;
                    }
                    
                }
                
                

            ?>
        </pre>
    </div>
</body>
</html>