<html>
    <head>
        <title>Users display</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="shortcut icon" href="../../ico.ico" type="image/x-icon" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body style="background-color:#0f3860;">
<?php
   require_once('../dbCtrl.php');
?>
<div class='jumbotron text-center'><h2> These are the registered users: </h2><br>
<a href="../professorView.php"><button class="btn btn-primary" type='button' value='Back'>Back</button></a></div>

<font color="white">
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
</font>
</body>
</html>