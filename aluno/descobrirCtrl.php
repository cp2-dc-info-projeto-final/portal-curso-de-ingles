<?php

    require "descobrir.php";

    session_start();

    if (descobre() == "2") {
        $erro = "You're not a student";        
        $_SESSION["erro"] = $erro;
        header("Location: ../autenticacao/loginView.php");
        exit();
    }   
    if (empty(descobre())) {
        $erro = "You need log in";        
        $_SESSION["erro"] = $erro;
        header("Location: ../autenticacao/loginView.php");
        exit();
    }   

?>