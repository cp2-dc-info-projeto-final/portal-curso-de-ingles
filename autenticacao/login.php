<?php

    function autentica($email, $senha) {

        $connection = mysqli_connect("localhost", "root", "", "portalcursodeingles");
 
        // Check connection
        if($connection === false){
            die("Erro de conecção com o MYSQL" . mysqli_connect_error());
        }
        //TENTATIVA
        /*
        session_start();
        $sql = "SELECT tipo FROM usuario WHERE email='$email'";

        $result = mysqli_query($connection, $sql);
        $erro = "";
        if(mysqli_query($connection, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $tipo = $row['tipo'];
                    $_SESSION["tipo"] = $tipo;
                }
            }
        } else{
            die("Erro ao buscar questões com a consulta $sql. " . mysqli_error($connection));
        }
        */
        //------------------------


        $sql = "SELECT senha, tipo FROM usuario WHERE email='$email'";
    
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $hash = $row["senha"];
                $tipo = $row["tipo"];
                
                if (password_verify($senha, $hash) == true) {
                    mysqli_close($connection);
                    return $tipo;
                }   else{
                    mysqli_close($connection);
                    return null;
                }
            } 
        }
            
    }   
?>