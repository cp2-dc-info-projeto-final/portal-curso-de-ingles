<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inserir palavras</title>
  <link rel="shortcut icon" href="ico.ico" type="image/x-icon" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>Inserir palavras</h1>      
  </div>
</div>

<div class="container">
  <p>Hora de Inserir Palavras!</p>
  <form action="loginCtrl.php" class="needs-validation" novalidate method="post">
    <div class="form-group">
      <label for="palavra">Palavra:</label>
      <input type="text" class="form-control" id="palavra" placeholder="Enter email" name="palavra" required>
    </div>
    <div class="form-group">
      <label for="significado">Senha:</label>
      <input type="text" class="form-control" id="significado" placeholder="Enter password" name="significado" required>

    </div>
    <div class="form-group">
      <label for="significado">Senha:</label>
      <input type="word" class="form-control" id="sinonimo" placeholder="Enter password" name="sinonimo" required>

    </div>
    <div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</body>
</html>
