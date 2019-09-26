
<html>
    <head>
        <title>Question display</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
<body>
<div class='jumbotron text-center'><h2> These are the registered questions: </h2><br>
<a href="../professorView.php"><input type='button' value='Back'></a></div>
<div class="container">
<?php
   require_once('verQuestoesCtrl.php');

    $questoes = exibirQuestoes();

    foreach ($questoes as $questao) {
        echo "<h3>" . $questao['enunciado'] . "</h3>";
        echo "<ol type='1'>";
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
</div>
</body>
</html>