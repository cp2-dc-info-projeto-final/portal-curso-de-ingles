<?php

    require_once('descobrir.php');

    session_start();

    if (descobre() == true) {

        exit();
    }
    else {
        $erro = "You're not a teatcher";        
        $_SESSION["erro"] = $erro;
        header("Location: ../autenticacao/loginView.php");
        exit();
    }    

?>