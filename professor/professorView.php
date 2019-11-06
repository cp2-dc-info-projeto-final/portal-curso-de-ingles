<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teacher Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../ico.ico" type="image/x-icon" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body style="background-color:#0f3860;">

<?php
   require_once('descobrirCtrl.php');
?>

<div class="jumbotron text-center">
<form action="sairCtrl.php" class="needs-validation" novalidate method="post">
<input type='submit' value='Log out'>
</form>
  <h1>Teacher Page</h1>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <a href="visualizacao/verQuestoesView.php"><img src="viewquestions.png"></a>
     
    </div>
    <div class="col-sm-4">
    <a href="envio/enviarView.php"><img src="createquestions.png"></a>
     
    </div>
    <div class="col-sm-4">
    <a href="visualizacao/verAlunosView.php"><img src="viewusers.png"></a>        
     
    </div>
    <div class="col-sm-4">
    <a href="marcaraula/marcaraulaView.php"><img src="scheduleclass.png"></a>        

    </div>
  </div>
</div>

</body>
</html>
