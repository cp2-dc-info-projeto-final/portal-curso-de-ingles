<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <link rel="shortcut icon" href="../ico.ico" type="image/x-icon" />
  <meta charset="utf-8">
  <link rel="stylesheet" href="../cadastro/cadastro.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#0f3860;">

<font color="white">

<div class="jumbotron jumbotron-fluid jumbotron-with-background" >
      <div class="container push-spaces">
</div>
</div>


<div class="container">    
<form action="cadastroCtrl.php" method="post">
    <div class="form-group">
        <label for="nome">Name</label>
        <input type="name" class="form-control" id="nome" placeholder="Enter name" name="nome">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
        <label for="sennha">Password</label>
        <input type="password" class="form-control" id="senha" placeholder="Enter password" name="senha">
        <label for="8digitos">Enter an 8 digit password, please</label>
    </div>
    <div class="form-group"><p>
        <label for="confimacao">Confirmation</label>
        <input type="password" class="form-control" id="confirmaSenha" placeholder="Enter password" name="confirmaSenha">
    </div>
    <div class="form-group">
        <label for="dataNasc">Date of birth</label>
        <input type="date" class="form-control" name="dataNasc" id="dataNasc">
    </div>

    <div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    <?php
        session_start();
        if(array_key_exists('erro', $_SESSION) == true){
            $erro = $_SESSION["erro"];
            echo "<br><b>$erro</b>";
        }
    ?>
    
    <p>
        <a href="../autenticacao/LoginView.php">Login</a>
    </p>
</form>
</div>
    </font>
</body>
</html>