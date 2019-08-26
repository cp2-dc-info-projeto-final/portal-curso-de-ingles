<?php
    
    require "enviarQuestoes.php";

    $enunciado = $_POST["enunciado"];
    $opA = $_POST["opA"];
    $opB = $_POST["opB"];
    $opC = $_POST["opC"];
    $opD = $_POST["opD"];
    $gabarito = $_POST["gabarito"];
    session_start();

    if ((empty($enunciado)) || (empty($opA)) || (empty($opB)) || (empty($opC)) || (empty($opD)) || (empty($gabarito)) ) {
        $erro = "Falta complementar os dados necessários";        
        $_SESSION["erro"] = $erro;
        header("Location: enviarView.php");
        exit();
    }
    


    $erro = "";

    if (enviarQuestao($enunciado, $opA, $opB, $opC, $opD, $gabarito) == true) {
        session_unset();
        header("Location: ../autenticacao/enviarView.php");
        exit();
    } else {
        $erro = "essa questão já foi enviada";        
        $_SESSION["erro"] = $erro;
        header("Location: enviarView.php");
        exit();
    }

?>