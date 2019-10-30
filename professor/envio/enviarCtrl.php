<?php
    
    require "enviarQuestoes.php";

    $enunciado = $_POST["enunciado"];
    $opA = $_POST["opA"];
    $opB = $_POST["opB"];
    $opC = $_POST["opC"];
    $opD = $_POST["opD"];
    $gabarito = $_POST["gabarito"];
    $tipo = $_POST["TIPO"];
    session_start();

    if ((empty($enunciado)) || (empty($opA)) || (empty($opB)) || (empty($opC)) || (empty($opD)) || (empty($gabarito)) || (empty($tipo))) {
        $erro = "Complementary data missing";        
        $_SESSION["erro"] = $erro;
        header("Location: enviarView.php");
        exit();
    }
    if (($gabarito != 1)&&($gabarito != 2)&&($gabarito != 3)&&($gabarito != 4)){
        $erro = "Feedback wrong, choice 1, 2, 3 or 4 ";        
        $_SESSION["erro"] = $erro;
        header("Location: enviarView.php");
        exit();

    }
    if (($tipo != 1)&&($tipo != 2)&&($tipo != 3)){
        $erro = "Type wrong, choice 1, 2 or 3 ";        
        $_SESSION["erro"] = $erro;
        header("Location: enviarView.php");
        exit();

    }
    


    $erro = "";

    if (enviarQuestao($enunciado, $opA, $opB, $opC, $opD, $gabarito, $tipo) == true) {
        header("Location: enviarView.php");
        exit();
    } else {
        $erro = "This question has already been submitted";        
        $_SESSION["erro"] = $erro;
        header("Location: enviarView.php");
        exit();
    }

?>