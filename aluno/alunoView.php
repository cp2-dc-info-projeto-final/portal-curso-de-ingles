<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Page</title>
  <meta charset="utf-8">
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
?>
<div class="jumbotron text-center">
<h1>Student Page</h1>

<form align="center" action="sairCtrl.php" class="needs-validation" novalidate method="post">
<button type="submit" value='Log out' class="btn btn-primary">Sign out</button>
</form>
  
  
</div>
  
<div class="container">
  <div class="row">
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <div class="col-sm-4">
      <a href="calendarioView.php"><img src="yourclasses.png"></a>
    </div>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <div class="col-sm-4">
    <a href="fazerQuestoesView.php"><img src="exercises.png"></a>        
    </div>
  </div>
</div>

</body>
</html>
