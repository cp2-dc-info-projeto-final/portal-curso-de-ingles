<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>
<h1>Login</h1>
<form action="login.php" method="post">
    <p>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
    </p>
    <p>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">
    </p>
    <p>
        <label for="senha">Tipo de Usuário</label>
        <input type="number" name="tipoUsuario" id="tipoUsuario" min="1" max="2">
        <label for="senha">Digite 1 para aluno ou 2 para professor</label>
    </p>
    <input type="submit" value="Enviar">
    <?php
        session_start();
        if(array_key_exists('erro', $_SESSION) == true){
            $erro = $_SESSION["erro"];
            echo "<br><b>$erro</b>";
        }
    ?>
    <p>
        <a href="../cadastro/cadastroView.php">Cadastre-se</a>
    </p>
</form>
</body>
</html>