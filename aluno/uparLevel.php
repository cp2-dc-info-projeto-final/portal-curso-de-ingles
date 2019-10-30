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
        
        if (mysqli_num_rows($result) > 0) {
            return false;
        }
        $novoTipo = 0;
        if($result == 1){
            $novoTipo = 3;
        }
        if($$result == 3){
            $novoTipo = 4;
        }
        if($$result == 2){
            $novoTipo = 2;
            die("Wrong type, you are not a student");
        }

        $sql = "UPDATE usuario SET tipo = '$novoTipo' WHERE email='$email'";

        if(mysqli_query($connection, $sql)){
            return true;
        } else{
            die("erro ao alterar tipo $sql. " . mysqli_error($connection));
        }

        mysqli_close($connection);
    }
?>