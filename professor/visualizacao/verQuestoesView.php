<html>
    <head>
        <title>PORRAQNFUNCIONANOMVCENTFIZNOVIEWEFDS</title>
        <meta charset="UTF-8">
    </head>
<body>

<?php
   require_once('verQuestoesCtrl.php');

    $questoes = exibirQuestoes();

    foreach ($questoes as $questao) {
        echo "<h3>" . $questao['enunciado'] . "</h3>";
        echo "<ol type='A'>";
        if ( $questao['gabarito'] == 1)
            echo "<b>";
        echo "<li>" . $questao['opA'] . "</li>";
        if ( $questao['gabarito'] == 1)
            echo "</b>";
        if ( $questao['gabarito'] == 2)
            echo "<b>";
        echo "<li>" . $questao['opB'] . "</li>";
        if ( $questao['gabarito'] == 2)
            echo "</b>";
        if ( $questao['gabarito'] == 3)
            echo "<b>";
        echo "<li>" . $questao['opC'] . "</li>";
        if ( $questao['gabarito'] == 3)
            echo "</b>";
        if ( $questao['gabarito'] == 4)
            echo "<b>";
        echo "<li>" . $questao['opD'] . "</li>";
        if ( $questao['gabarito'] == 4)
            echo "</b>";
        echo "</ol>";
    }
?>
</body>
</html>