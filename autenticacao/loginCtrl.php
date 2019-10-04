<?php

    require "login.php";

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $tipo = $_POST["tipo"];
        
    session_start();

    if (empty($senha)) {
        $erro = "Password cannot be empty";
        $_SESSION["erro"] = $erro;
        header("Location: loginView.php");
        exit();
    }


    if (autentica($email, $senha) == true) {
        session_unset();
        $_SESSION["nome"] = $row["nome"]; 
        $_SESSION["tipo"] = $row["tipo"]; 
        header("Location: ../aluno/alunoView.php"); 
        
        
        exit();
    }
    else {
        $erro = "Incorrect username, login or password";        
        $_SESSION["erro"] = $erro;
        header("Location: loginView.php");
        exit();
    }    
?>