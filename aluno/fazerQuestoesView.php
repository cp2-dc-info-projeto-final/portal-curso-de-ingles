<html>
    <head>
        <title>Fazer questões</title>
        <meta charset="UTF-8">
    </head>
<body>

<form action="fazerQuestoesCtrl.php" class="needs-validation" novalidate method="post">

<?php
   require_once('fazerQuestoesCtrl.php');

    $questoes = exibirQuestoes();

    foreach ($questoes as $questao) {
        echo "<h3>" . $questao['enunciado'] . "</h3>";
        echo "<ol type='A'>";
        
        echo "<li>" . $questao['opA'] . "</li>";
        echo "<input type='radio' name='q_" . $questao['idquestao'] . "' value='A' checked /> A";
        echo "<li>" . $questao['opB'] . "</li>";
        echo "<input type='radio' name='q_" . $questao['idquestao'] . "' value='B'/> B";
        echo "<li>" . $questao['opC'] . "</li>";
        echo "<input type='radio' name='q_" . $questao['idquestao'] . "' value='C'/> C";
        echo "<li>" . $questao['opD'] . "</li>";
        echo "<input type='radio' name='q_" . $questao['idquestao'] . "' value='D'/> D";
        
        echo "</ol>";
    }
?>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>