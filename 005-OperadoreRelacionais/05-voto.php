<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
</head>
<body>
    <?php
        $ano = 2022;
        $anoNascimento =  1900;
        $idade = $ano - $anoNascimento;

        echo "Quem nasceu em $anoNascimento tem $idade anos";

        $tipo = ($idade >= 18 && $idade < 65)? "OBRIGATÓRIO": "NÃO OBRIGATÓRIO";

        echo "<br>E dessa forma seu voto é $tipo";
    ?>

</body>
</html>