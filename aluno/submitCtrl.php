<?php
    
    require "submit.php";

    foreach($_POST as $key => $value) {
        echo "$key = $value ";
        //if($key == $gabarito){
           //adicionar no total pra puxar porcentagem dps 
        //}
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