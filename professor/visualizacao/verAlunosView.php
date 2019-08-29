<html>
    <head>
        <title>Visualização de alunos</title>
        <meta charset="UTF-8">
    </head>
<body>
<h2> Estes são os alunos registrados: </h2>

<?php
   require_once('verAlunosCtrl.php');

    $alunos = exibirAlunos();

    foreach ($alunos as $aluno) {
        echo "<h3>" . $aluno['id'] . "</h3>";
        echo "<ol type='A'>";
        echo "<li>" . $aluno['nome'] . "</li>";
        echo "<li>" . $aluno['email'] . "</li>";
        echo "</ol>";
        
    }
?>
</body>
</html>