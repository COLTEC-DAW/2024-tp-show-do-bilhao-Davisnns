<?php
    $enunciados = array("Em que estado brasileiro nasceu a apresentadora Xuxa?", "Qual era o apelido da cantora Elis Regina?", "Quem é o patrono do exército brasileiro?", "Qual é o signo do zodíaco de quem nasce no dia do ano-novo?", "Qual lugar é também chamado de Santa Sé?");

    $alternativas[0] = array("Rio de Janeiro", "Rio Grande do Sul", "Santa Catarina","Goias");
    $alternativas[1] = array("Gaúchinha", "Paulistinha", "Pimentinha","Andorinha");
    $alternativas[2] = array("Marechau Deodoro", "Barão de Mauá", "Duque de Caxias","Marquês de Pombal");
    $alternativas[3] = array("Virgem", "Aquário", "Capricórnio","Áries");
    $alternativas[4] = array("Veneza", "Vitória", "Vancouver","Vaticano");

    $respostas = array(1, 2, 2, 2, 3);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Show do Bilhao</title>
    </head>
    <body>
            <?php
                for ($i=0; $i < 5; $i++) { 
                    echo "$enunciados[$i] <br>";
                    for ($j=0; $j <4 ; $j++) { 
                        echo "{$alternativas[$i][$j]} <br>";
                    }
                    echo "A resposta correta é: <strong>{$alternativas[$i][$respostas[$i]]}</strong><br><br>";
                }

            ?>

    </body>
</html> 