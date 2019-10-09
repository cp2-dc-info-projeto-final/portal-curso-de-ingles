<?php

    require "login.php";

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    session_start();

    $_SESSION["email"] = $email;

    if (empty($senha)) {
        $erro = "Password cannot be empty";
        $_SESSION["erro"] = $erro;
        header("Location: loginView.php");
        exit();
    }

    $tipo = autentica($email, $senha);
    if (isset($tipo)) {
        session_unset();
        $_SESSION["email"] = $email;
        $_SESSION["tipo"] = $tipo;
        if($tipo == '1'){
            header("Location: ../aluno/alunoView.php");
        }
        if($tipo == '2'){
            header("Location: ../professor/professorView.php");
        }
        exit();
    }
    else {
        $erro = "Incorrect username, login or password";        
        $_SESSION["erro"] = $erro;
        header("Location: loginView.php");
        exit();
    }    
?>