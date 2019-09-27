<?php
    
    require "submit.php";

    //$nome = $_POST["nome"]; aqui terá o check do radiobutton


    session_start();

    $erro = "";

    //verificação se respondeu if () {
        session_unset();
        header("Location: ../autenticacao/loginView.php");
        exit();
    } else {
        $erro = "Answer all questions";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastroView.php");
        exit();
    }

?>