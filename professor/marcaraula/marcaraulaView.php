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
  <script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker3.min.css">
<script>
$( document ).ready(function() {
    $("#calendario").datepicker({ 
        format: 'yyyy-mm-dd'
    });
    
}); 
</script>
    </head>
    <body style="background-color:#0f3860;">
    <?php
   require_once('../dbCtrl.php');
    ?>

        <div class='jumbotron text-center'><h1>Schedule class</h1>
        <a href="../professorView.php"><button class="btn btn-primary" type='button' value='Back'>Back</button></a></div>

        
        <div class='container'>
            <center><font color="white"><h2>Select the student:</h2></font>
            <form action="mcCtrl.php" method="post">
                <input id="idaluno" list="listaalunos" name="Aluno" type="text" />
                <datalist id="listaalunos">
                        <?php 

                            require_once('marcarAulaCtrl.php');
                            $alunos = exibirAlunos();

                            foreach ($alunos as $aluno) {

                            echo'<option value="' .$aluno['id'].'">
                                ' . $aluno['nome'] . '
                            </option>'; 

                            }

                        ?>
                </datalist>
                <font color="white"><h2>Select the date: </h2></font>
                <input type="text" id="calendario" name="calendario"/>
                <font color="white"><h2>Choose a time for your meeting: </h2></font>
                <input type="time" id="hora" name="hora" required>
                <br>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </center>
                            <?php
                            if (isset($_POST[$aluno['id']])) {
                                echo "";
                            }
                            ?>

        </div>
    </body>
</html>