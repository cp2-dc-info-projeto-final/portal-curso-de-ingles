<?php
    
    function cadastraAula($iddoaluno,$calendario) {

        $connection = mysqli_connect("localhost", "root", "", "portalcursodeingles");
 
        // Check connection
        if($connection === false){
            die("Erro no mysql " . mysqli_connect_error());
        }

        $sql = "SELECT id FROM aula WHERE aluno='$iddoaluno";
        
        $result = mysqli_query($connection, $sql);

        $erro = "";
        
        if (mysqli_num_rows($result) > 0) {
            return false;
        }

        $sql = "INSERT INTO aula (data_aula,aluno,professor) VALUES('$calendario', '$iddoaluno', '1')";

        if(mysqli_query($connection, $sql)){
            return true;
        } else{
            die("mark class error $sql. " . mysqli_error($connection));
        }

        mysqli_close($connection);
    }
?>