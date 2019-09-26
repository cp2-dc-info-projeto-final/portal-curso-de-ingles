<html>
    <head>
        <title>Users display</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
<body>
<div class='jumbotron text-center'><h2> These are the registered users: </h2><br>
<a href="../professorView.php"><input type='button' value='Back'></a></div>
<div class="container">
<?php
   require_once('verAlunosCtrl.php');

    $alunos = exibirAlunos();

    foreach ($alunos as $aluno) {
        echo "<h3>" . $aluno['id'] . "</h3>";
        echo "<ol type='1'>";
        echo "<li>" . $aluno['nome'] . "</li>";
        echo "<li>" . $aluno['email'] . "</li>";
        echo "</ol>";
        
    }
?>
</div>
</body>
</html>