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
    </head>
    <body>
        <div class='jumbotron text-center'><h1>Schedule class</h1></div>
        <div class='container'>
            <center><h2>Select the student:</h2>
            <input id="idaluno" name="Aluno" type="text" list="listaalunos">
                <datalist id="listaalunos">
                    <select name="estiloaluno" id="estiloaluno">
                        <?php 

                        require_once('../visualizacao/verAlunosCtrl.php');
                        $alunos = exibirAlunos();
                        
                        foreach ($alunos as $aluno) {
                            if($aluno['tipo'] != 2){
                        echo'<option value="Aluno '. $aluno['id'] .'">
                            ' . $aluno['nome'] . '
                        </option>'; 
                            }
                        }
                        
                        ?>
                        
                    </select>
                </datalist>   
                    </center> 
        </div>
    </body>
</html>