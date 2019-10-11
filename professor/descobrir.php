<?php

    function descobre() {
        if($_SESSION["tipo"] == "2"){
            $tipo = $_SESSION["tipo"];
            return $tipo;
        }else{
            $erro = "You are not a teacher, you can't see this. ";
            $_SESSION["erro"] = $erro;
            return null;
        }
        
    }   
?>