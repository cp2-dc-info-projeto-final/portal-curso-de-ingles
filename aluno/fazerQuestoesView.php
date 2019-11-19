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

<body style="background-color:#0f3860;">

<?php
   require_once('descobrirCtrl.php');
   $nivelaluno = nivelaluno();
   //echo"$nivelaluno";
?>
<div class='jumbotron text-center'><h1> Awser Questions: </h1><br>
<a href="alunoView.php"><button class="btn btn-primary" type='button' value='Back'>Back</button></a></div>

<div class="container">
    <font color="white">
<form action="fazerQuestoesView.php" class="needs-validation" novalidate method="post">

<?php
$rodadas = 0;
$contadorDeAcertos = 0;
$numDeQuestoes = 0;

   require_once('fazerQuestoesCtrl.php');

    $questoes = exibirQuestoes();

    foreach ($questoes as $questao) {
        //IF PARA SABER SE A QUESTAO CONDIZ COM O NIVEL
        if(($questao['tipo'] == '1') && ($nivelaluno == '1') || ($questao['tipo'] == '2') && ($nivelaluno == '3') || ($questao['tipo'] == '3') && ($nivelaluno == '4')){
        $numDeQuestoes++;
        echo "<h3>" . $questao['enunciado'] . "</h3>";
        echo "<ol type='A'>";
        
        if (isset($_POST[$questao['idquestao']])) {
            $rodadas ++;
            echo "<li>" . $questao['opA'] . "</li>";
            if ($questao['gabarito'] == 1) {
                echo "<input type='radio' name='" . $questao['idquestao'] . "' value='1' checked /> <b>A</b>";
            } else {
                echo "<input type='radio' name='" . $questao['idquestao'] . "' value='1'/> A";
            }
            
            echo "<li>" . $questao['opB'] . "</li>";
            if ($questao['gabarito'] == 2) {
                echo "<input type='radio' name='" . $questao['idquestao'] . "' value='2' checked /> <b>B</b>";
            } else {
                echo "<input type='radio' name='" . $questao['idquestao'] . "' value='2'/> B";
            }
            echo "<li>" . $questao['opC'] . "</li>";
            if ($questao['gabarito'] == 3) {
                echo "<input type='radio' name='" . $questao['idquestao'] . "' value='3' checked /> <b>C</b>";
            } else {
                echo "<input type='radio' name='" . $questao['idquestao'] . "' value='3'/> C";
            }
            echo "<li>" . $questao['opD'] . "</li>";
            if ($questao['gabarito'] == 4) {
                echo "<input type='radio' name='" . $questao['idquestao'] . "' value='4' checked /> <b>D</b>";
            } else {
                echo "<input type='radio' name='" . $questao['idquestao'] . "' value='4'/> D";
            }
            echo "<br>";

            if ($_POST[$questao['idquestao']] == $questao['gabarito']) {
                echo "Correct Awser";
                $contadorDeAcertos++;
                //echo "$contadorDeAcertos";
            } else {
                echo "Wrong Awser";
                //echo "$contadorDeAcertos";
            }

        } else {
            echo "<li>" . $questao['opA'] . "</li>";
            echo "<input type='radio' name='" . $questao['idquestao'] . "' value='1'/> A";
            echo "<li>" . $questao['opB'] . "</li>";
            echo "<input type='radio' name='" . $questao['idquestao'] . "' value='2'/> B";
            echo "<li>" . $questao['opC'] . "</li>";
            echo "<input type='radio' name='" . $questao['idquestao'] . "' value='3'/> C";
            echo "<li>" . $questao['opD'] . "</li>";
            echo "<input type='radio' name='" . $questao['idquestao'] . "' value='4'/> D";
        }
        
        
        echo "</ol>";
        //FIM DO IF DE NIVEL 
        }
    }
    if (($contadorDeAcertos == $numDeQuestoes) ){
        //echo "level up";
        require_once('uparLevelCtrl.php');
        upar();
    }
    //echo " rodadas: $rodadas";
    if($rodadas<=0){
        echo("<button class='btn btn-primary' type='submit'>Submit</button>");
    }else{
        echo("<a href='alunoView.php'><input type='button' value='Back To Student Page'></a></div>");
    }
?>

</form>
</font>
</body>
</html>