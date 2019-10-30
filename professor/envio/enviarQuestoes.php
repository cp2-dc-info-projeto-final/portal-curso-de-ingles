<?php
    
    function enviarQuestao($enunciado, $opA, $opB, $opC, $opD, $gabarito, $tipo) {

        $connection = mysqli_connect("localhost", "root", "", "portalcursodeingles");
 
        // Check connection
        if($connection === false){
            die("erro no mysql" . mysqli_connect_error());
        }

        $sql = "SELECT id FROM questao WHERE enunciado='$enunciado'";

        $result = mysqli_query($connection, $sql);

        $erro = "";
        
        if (mysqli_num_rows($result) > 0) {
            return false;
        }

        $sql = "INSERT INTO questao (enunciado, opA, opB, opC, opD, gabarito, TIPO) VALUES('$enunciado', '$opA', '$opB', '$opC', '$opD', '$gabarito', '$tipo')";

        if(mysqli_query($connection, $sql)){
            return true;
        } else{
            die("erro no mysql $sql. " . mysqli_error($connection));
        }

        mysqli_close($connection);
    }
?>