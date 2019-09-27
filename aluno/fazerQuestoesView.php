<html>
    <head>
        <title>Awser Questions</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="shortcut icon" href="../ico.ico" type="image/x-icon" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class='jumbotron text-center'><h2> Awser Questions: </h2><br>
<a href="alunoView.php"><input type='button' value='Back'></a></div>
<div class="container">
<form action="submitCtrl.php" class="needs-validation" novalidate method="post">

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