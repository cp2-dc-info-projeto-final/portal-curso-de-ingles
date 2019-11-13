<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teacher Page</title>
  <link rel="shortcut icon" href="../ico.ico" type="image/x-icon" />
  <meta charset="utf-8">
  <link rel="stylesheet" href="../professor/professor.css">
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

<div class="jumbotron jumbotron-fluid jumbotron-with-background" >
<div class="container push-spaces">


<form align="right" action="sairCtrl.php" class="needs-validation" novalidate method="post">
<button type="submit" value='Log out' class="btn btn-primary">Sign out</button>
</form>


</div>
</div>


<div class="container">
<div class="col-md-12 fundo" align="center"> 
 
      <div>
      <a href="visualizacao/verQuestoesView.php"><img src="viewquestions.png"></a>
      </div>
      <br>
      <br>
     <div>
     <a href="envio/enviarView.php"><img src="createquestions.png"></a>
     </div>
     <br>
     <br>   
      <div>
       <a href="visualizacao/verAlunosView.php"><img src="viewusers.png"></a>        
       </div>
       <br>
       <br>
     <div>
     <a href="marcaraula/marcaraulaView.php"><img src="scheduleclass.png"></a>
     </div>
</div>
</div>





</body>
</html>
