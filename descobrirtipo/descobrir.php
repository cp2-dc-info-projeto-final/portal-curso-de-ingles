<?php

    function descobre() {
        if($_SESSION["email"] == "professor@gmail.com"){
            return true;
        }else{
            $erro = "You are not a teacher, you can't see this. ";
            $_SESSION["erro"] = $erro;
            return false;
        }
        
        /*$connection = mysqli_connect("localhost", "root", "", "portalcursodeingles");
 
        // Check connection
        if($connection === false){
            die("Erro de conecção com o MYSQL" . mysqli_connect_error());
        }
        
        $sql = "SELECT tipo FROM usuario WHERE email='$email'";
    
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $tipo = $row["tipo"];
                $_SESSION["tipo"] = $tipo;
                if ($tipo == true) {
                    if($tipo == '2'){
                    mysqli_close($connection);
                    return true;
                    }
                }   else{
                    mysqli_close($connection);
                    return false;
                }
            } 
        }
           */ 
    }   
?>