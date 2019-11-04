<?php

require "mc.php";

$iddoaluno = $_POST["Aluno"];
$calendario = $_POST["calendario"];
echo "$iddoaluno ";
echo "$calendario";

if (strlen($calendario) != 10) {
    $erro = "Invalid day. ";        
        $_SESSION["erro"] = $erro;
        header("Location: ../professorView.php");
        exit();
}

$erro = "";

    if (cadastraAula($iddoaluno, $calendario) == true) {
        header("Location: ../professorView.php");
        exit();
    } else {
        $erro = "Schedule error ";        
        $_SESSION["erro"] = $erro;
        header("Location: ../professorView.php");
        exit();
    }

?>