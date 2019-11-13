<?php
    
    function uparLevel($email) {

        $connection = mysqli_connect("localhost", "root", "", "portalcursodeingles");
 
        // Check connection
        if($connection === false){
            die("Erro no mysql " . mysqli_connect_error());
        }

        $sql = "SELECT tipo FROM usuario WHERE email='$email'";

        $result = mysqli_query($connection, $sql);

        $erro = "";
        //die("resulado da query $result. " );
        
        if (mysqli_num_rows($result) > 1) {
            return false;
        }
        $row = mysqli_fetch_assoc($result);
        $qry = $row['tipo'];
        $novoTipo = 0;
        if($qry == 1){
            $novoTipo = 3;
        }
        if($qry == 3){
            $novoTipo = 4;
        }
        if($qry == 2){
            $novoTipo = 2;
            die("Wrong type, you are not a student");
        }

        $sql = "UPDATE usuario SET tipo='$novoTipo' WHERE email='$email'";

        if(mysqli_query($connection, $sql)){
            $_SESSION["tipo"] = $novoTipo;
            return true;
        } else{
            die("erro ao alterar tipo $sql. " . mysqli_error($connection));
        }

        mysqli_close($connection);
    }
?>