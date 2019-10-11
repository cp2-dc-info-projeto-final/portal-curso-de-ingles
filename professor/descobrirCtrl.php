<?php

    require "descobrir.php";

    session_start();

    if (descobre() != "2") {
        $erro = "You're not a teacher";        
        $_SESSION["erro"] = $erro;
        header("Location: ../autenticacao/loginView.php");
        exit();
    }    

?>