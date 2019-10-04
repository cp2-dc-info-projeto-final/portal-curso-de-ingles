<?php

    function autentica($email, $senha) {
        
        $connection = mysqli_connect("localhost", "root", "", "portalcursodeingles");
 
        // Check connection
        if($connection === false){
            die("Erro de conecção com o MYSQL" . mysqli_connect_error());
        }
        
        $sql = "SELECT senha FROM usuario WHERE email='$email'";
    
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $hash = $row["senha"];
    
                if (password_verify($senha, $hash)) {
                    $sql = "SELECT tipo FROM usuario WHERE email='$email'";
                    $result = mysqli_query($connection, $sql);
                    if (mysqli_num_rows($result) > 0) {
                    $tipo = $row["tipo"]

                    mysqli_close($connection);
                    return true;
                } else {
                    mysqli_close($connection);
                    return false;
                }
            }
        } else {
            mysqli_close($connection);
            return false;
        }

        
    }   
?>