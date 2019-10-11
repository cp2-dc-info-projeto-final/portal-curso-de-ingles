<?php

    require_once('descobrir.php');

    session_start();

    if (descobre() == "2") {
        echo ("teste " . $_SESSION['tipo']);
        header("Location: ../professor/professorView.php");
        exit();
    }
    else {
        $erro = "You're not a teatcher";        
        $_SESSION["erro"] = $erro;
        header("Location: ../autenticacao/loginView.php");
        exit();
    }    

?>