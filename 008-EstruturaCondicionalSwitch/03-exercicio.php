<!DOCTYPE html>
<html lang="en">
<head>

    <?php
        $uf = isset($_GET["uf"]) ? $_GET["uf"] : "Nome de estado inválido.";

        

    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição Switch</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            switch($uf)
            {
                case 'ACRE':
                case 'AMAZONAS':
                case 'RONDÔNIA':
                case 'PARÁ':
                case 'TOCANTINS':
                case 'AMAPÁ':
                case 'RORAIMA':
                    echo "Você esta na região <span class='foco'>Norte.</span>";
                    break;
                case 'MARANHÃO':
                case 'PIAUÍ':
                case 'CEARÁ':
                case 'RIO GRANDE DO NORTE':
                case 'PARAÍBA':
                case 'PERNAMBUCO':
                case 'ALAGOAS':
                case 'SERGIPE':
                case 'BAHIA':
                    echo "Você esta na região <span class='foco'>Nordeste.</span>";
                    break;
                case 'MATO GROSSO':
                case 'MATO GROSSO DO SUL':
                case 'GOIÁS':
                case 'DISTRITO FEDERAL':       
                    echo "Você esta na região <span class='foco'>Centro-Oeste.</span>";
                    break;
                case 'MINAS GERAIS':
                case 'ESPÍRITO SANTO':
                case 'RIO DE JANEIRO':
                case 'SÃO PAULO':                
                    echo "Você esta na região <span class='foco'>Sudeste.</span>";
                    break;
                case 'PARANÁ':
                case 'SANTA CATARINA':
                case 'RIO GRANDE DO SUL':                             
                    echo "Você esta na região <span class='foco'>Sul.</span>";
                    break;
                default:
                    echo "Valor inválido.";
            }
        ?>
        <hr><br>
        <a href="03-exercicio.html" class="botao">Voltar</a>
    </div>
</body>
</html>