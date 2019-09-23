<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <link rel="shortcut icon" href="ico.ico" type="image/x-icon" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Cadastro</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>


<div class="container">    
<form action="cadastroCtrl.php" method="post">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="name" class="form-control" id="nome" placeholder="Enter name" name="nome">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" id="senha" placeholder="Enter password" name="senha">
        <label for="8digitos">DIGITA UMA SENHA DE 8 DIGITOS PELO AMOR DE SANTA NAY</label>
    </div>
    <div class="form-group"><p>
        <label for="senha">Confirmação</label>
        <input type="password" class="form-control" id="confirmasenha" placeholder="Enter password" name="confirmasenha">
    </div>
    <div class="form-group">
        <label for="dataNasc">Data de nascimento</label>
        <input type="date" class="form-control" name="dataNasc" id="dataNasc">
    </div>

    <div>
        <input type="submit" value="Enviar">
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
</body>
</html>