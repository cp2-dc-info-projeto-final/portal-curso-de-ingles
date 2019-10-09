<?php

    function descobre() {
        
        $connection = mysqli_connect("localhost", "root", "", "portalcursodeingles");
 
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
            
    }   
?>