<html>
    <head>
        <title>Schedule class</title>
        <link rel="shortcut icon" href="../../ico.ico" type="image/x-icon" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
  <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
  <script>
$(function() {
    $( "#calendario" ).datepicker({
        showOn: "button",
        buttonImage: "calendario.png",
        buttonImageOnly: true
    });
});
</script>  
    </head>
    <body>
    <?php
   require_once('../dbCtrl.php');
    ?>
    <?php

    if(isset($_POST['submit'])) {
        $aluno = $_POST['listaalunos'];
        echo $country;
    }

    ?>

        <div class='jumbotron text-center'><h1>Schedule class</h1></div>
        <div class='container'>
            <center><h2>Select the student:</h2>
            <form action="mcCtrl.php" method="post">
                <input id="idaluno" list="listaalunos" name="Aluno" type="text" />
                <datalist id="listaalunos">
                        <?php 

                            require_once('../visualizacao/verAlunosCtrl.php');
                            $alunos = exibirAlunos();

                            foreach ($alunos as $aluno) {

                            echo'<option value="Aluno '. $aluno['id'] .'">
                                ' . $aluno['nome'] . '
                            </option>'; 

                            }

                        ?>
                </datalist>
                <h2>Select the date:</h2>
                <input type="text" id="calendario" />
                <br>
                <br>
                <input type="submit" name="submit" />
            </form>
            </center>
        <?php 
        echo"$exibido";

        ?>

        </div>
    </body>
</html>