<html>
    <head>
        <title>Fazer questões</title>
        <meta charset="UTF-8">
    </head>
<body>

<?php
   require_once('fazerQuestoesCtrl.php');

    $questoes = exibirQuestoes();

    foreach ($questoes as $questao) {
        echo "<h3>" . $questao['enunciado'] . "</h3>";
        echo "<ol type='A'>";
        
        echo "<li>" . $questao['opA'] . "</li>";
        echo "<input type='radio' name='q_" . $questao['idquestao'] . "' value='A' checked /> A";
        echo "<input type='radio' name='q_" . $questao['idquestao'] . "' value='B'/> B";
        echo "<input type='radio' name='q_" . $questao['idquestao'] . "' value='C'/> C";
        echo "<input type='radio' name='q_" . $questao['idquestao'] . "' value='D'/> D";
        
        echo "</ol>";
    }
?>
</body>
</html>