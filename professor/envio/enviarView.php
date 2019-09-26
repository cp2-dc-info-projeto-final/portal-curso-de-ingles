<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Questions</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="shortcut icon" href="../../ico.ico" type="image/x-icon" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class='jumbotron text-center'><h2> Create Questions: </h2><br>
<a href="../professorView.php"><input type='button' value='Back'></a></div>
<div class="container">
<form action="enviarCtrl.php" method="post">
    <p>
        <label for="enunciado">Statement</label>
        <input type="text" name="enunciado" id="enunciado">
    </p>
    <p>
        <label for="opA">Option 1</label>
        <input type="text" name="opA" id="opA">
    </p>
    <p>
        <label for="opB">Option 2</label>
        <input type="text" name="opB" id="opB">
    </p>
    <p>
        <label for="opC">Option 3</label>
        <input type="text" name="opC" id="op´C">
    </p>
    <p>
        <label for="opD">Option 4</label>
        <input type="text" name="opD" id="opD">
    </p>
    <p>
        <label for="gabarito">Feedback</label>
        <input type="number" min="1" max="4" name="gabarito" id="gabarito">
    </p>

    

    <input type="submit" value="submit">

    <?php
        session_start();
        if(array_key_exists('erro', $_SESSION) == true){
            $erro = $_SESSION["erro"];
            echo "<br><b>$erro</b>";
        }
    ?>

</form>
</div>
</body>
</html>