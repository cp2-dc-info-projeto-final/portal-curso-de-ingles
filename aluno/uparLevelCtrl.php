<?php

    require "uparLevel.php";

    function upar() {
        $tipoOld = $_SESSION["tipo"];
        //$email = $_SESSION["email"];   essa linha exibe resultados válidos, o problema não parece ser aqui.
        echo "$tipoOld"; echo "$email";
        if($tipoOld >3){
            echo "You are the best ";

        }else{
            if (uparLevel($email) == true){
                session_unset();
                header("Location: ../../autenticacao/loginView.php");
                exit();
            }

        }


        return null;
    }
    
?>