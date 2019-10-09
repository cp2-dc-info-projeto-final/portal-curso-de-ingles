<?php

    require "descobrir.php";

    $tipo = $_POST["tipo"];
        
    session_start();

    if (descobre() == true) {
        session_unset();     
        exit();
    }
    else {
        $erro = "You're not a teatcher";        
        $_SESSION["erro"] = $erro;
        header("Location: ../autenticacao/loginView.php");
        exit();
    }    
?>