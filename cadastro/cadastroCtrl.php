<?php
    
    require "cadastroUsuario.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmaSenha = $_POST["confirmaSenha"];
    $dataNasc = $_POST["dataNasc"];

    session_start();

    if ($senha != $confirmaSenha) {    
        $erro = "As senhas não coincidem";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastroView.php");
        exit();
    }

    if (strlen($senha) != 8) {    
        $erro = "A senha não têm apenas 8 dígitos.";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastroView.php");
        exit();
    }

    $erro = "";

    if (cadastraUsuario($nome, $email, $senha, $dataNasc) == true) {
        session_unset();
        header("Location: ../autenticacao/loginView.php");
        exit();
    } else {
        $erro = "E-mail indisponível";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastroView.php");
        exit();
    }

?>