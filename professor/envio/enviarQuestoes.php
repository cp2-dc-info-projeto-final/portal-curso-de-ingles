<?php
    
    function enviarQuestao($enunciado, $opA, $opB, $opC, $opD, $gabarito, $TIPO) {

        $connection = mysqli_connect("localhost", "root", "", "portalcursodeingles");
 
        // Check connection
        if($connection === false){
            die("Mano acho q n ta rolando aqui o  mysql :v" . mysqli_connect_error());
        }

        $sql = "SELECT id FROM questao WHERE enunciado='$enunciado'";

        $result = mysqli_query($connection, $sql);

        $erro = "";
        
        if (mysqli_num_rows($result) > 0) {
            return false;
        }

        $sql = "INSERT INTO questao (enunciado, opA, opB, opC, opD, gabarito, TIPO) VALUES('$enunciado', '$opA', '$opB', '$opC', '$opD', '$gabarito', '$TIPO')";

        if(mysqli_query($connection, $sql)){
            return true;
        } else{
            die("deu um erro fudido ao tentar enviar a questao, tenta de novo sla $sql. " . mysqli_error($connection));
        }

        mysqli_close($connection);
    }
?>