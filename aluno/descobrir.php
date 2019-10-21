<?php

    function descobre() {
        if(empty($_SESSION["tipo"])){
            $erro = "You are not a student, you can't see this. ";
            $_SESSION["erro"] = $erro;
            return null;
        }else{
        
        if($_SESSION["tipo"] != "2"){
            $tipo = $_SESSION["tipo"];
            return $tipo;
        }else{
            $erro = "You are not a student, you can't see this. ";
            $_SESSION["erro"] = $erro;
            $tipo = $_SESSION["tipo"];
            return $tipo;
        }
    }
        
    }   
?>