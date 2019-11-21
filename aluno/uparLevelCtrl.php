<?php

    require "uparLevel.php";

    function upar() {
        $tipoOld=$_SESSION["tipo"];
        $email=$_SESSION["email"];
        //echo "$tipoOld"; echo "$email";
        if($tipoOld>3){
            echo"You are the best ";

        }else{
            if (uparLevel($email)==true){
                $tipoNovinho=$_SESSION["tipo"];
                session_unset();
                $_SESSION["tipo"]=$tipoNovinho;
                $_SESSION["email"]=$email;
                //header("Location: alunoView.php");
                exit();
            }

        }
    }
    
?>