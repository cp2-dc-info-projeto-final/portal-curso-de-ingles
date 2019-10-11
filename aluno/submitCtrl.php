<?php
    
    require "submit.php";

    foreach($_POST as $key => $value) {
        echo "$key = $value ";
      }

    $erro = "";

    /*if () {
        session_unset();
        exit();
    } else {
        $erro = "Answer all questions";        
        $_SESSION["erro"] = $erro;
        exit();
    }*/

?>