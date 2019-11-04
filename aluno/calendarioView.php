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
<body>
<?php
   require_once('descobrirCtrl.php');
?>
<div class='jumbotron text-center'><h2> These are your classes dates: </h2><br>
<a href="alunoView.php"><input type='button' value='Back'></a></div>
<div class="container">
<?php
   require_once('calendarioCtrl.php');
   require_once('verAlunosCtrl.php');
    $alunos = exibirAlunos();
    $aulas = exibirAulas();
    foreach ($aulas as $aula) {
        foreach ($alunos as $aluno) {
            if($aluno['id'] == $aula['aluno']){
                if(($aluno['email']) == ($_SESSION['email'])){
                    $idAb = $aluno['id'];
                }
            }
        }
    }
    //echo ($_SESSION['email']);


    foreach ($aulas as $aula) {
        if($aula['aluno'] == $idAb){
        echo "<h3>" . $aula['data_aula'] . "</h3>";
        echo "<p>" . $aula['hora'] . "</p>";
        echo "<br>";
        }
    }


?>
</div>
</body>
</html>