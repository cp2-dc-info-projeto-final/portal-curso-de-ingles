<?php
    
    require "cadastroUsuario.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmaSenha = $_POST["confirmaSenha"];
    $dataNasc = $_POST["dataNasc"];

    session_start();

    if ($senha != $confirmaSenha) {    
        $erro = "Passwords do not match";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastroView.php");
        exit();
    }

    if (strlen($senha) != 8) {    
        $erro = "The password does not have only 8 digits";        
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
        $erro = "Email unavailable";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastroView.php");
        exit();
    }

?>