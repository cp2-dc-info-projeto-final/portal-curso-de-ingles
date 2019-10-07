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
<body>
<?php
   require_once('professorCtrl.php');
?>

<div class="jumbotron text-center">
<form action="sairCtrl.php" class="needs-validation" novalidate method="post">
<input type='submit' value='Log out'>
</form>
  <h1>Teacher Page</h1><?php echo"Welcome ". $_SESSION['nome']"";?>

</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <a href="visualizacao/verQuestoesView.php"><img src="ola.png"></a>
      <p>View questions with feedback</p>
    </div>
    <div class="col-sm-4">
    <a href="envio/enviarView.php"><img src="ola.png"></a>
      <p>Create questions</p>
    </div>
    <div class="col-sm-4">
    <a href="visualizacao/verAlunosView.php"><img src="ola.png"></a>        
      <p>View users</p>
    </div>
    <div class="col-sm-4">
    <a href="marcaraula/marcaraulaView.php"><img src="ola.png"></a>        
      <p>Schedule class</p>
    </div>
  </div>
</div>

</body>
</html>
