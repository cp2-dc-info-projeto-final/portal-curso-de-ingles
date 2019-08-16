<?php

    require "login.php";

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $tipoUsuario = $_POST["tipoUsuario"];
        
    session_start();

    if (autentica($email, $senha, $tipoUsuario) == true) {
        session_unset();
        $_SESSION["nome"] = $row["nome"]; 
        header("Location: alunoView.php"); 
        /*
        essa porra tá comentada por enquanto pq eu n sei se vai funcionar e
        AH MANO SLA FDS EU COMENTO OQ EU QUISER TO NEM AI, CÓDIGO TÓXICO
        if($tipoUsuario == 1){header("Location: alunoView.php");}
        if($tipoUsuario == 2){header("Location: professorView.php");}
        */
        exit();
    }
    else {
        $erro = "Tipo do usuário, login ou senha incorretos";        
        $_SESSION["erro"] = $erro;
        header("Location: loginView.php");
        exit();
    }    
?>