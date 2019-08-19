<?php
    
    function cadastraUsuario($nome, $email, $senha, $dataNasc) {

        $connection = mysqli_connect("localhost", "root", "", "portalcursodeingles");
 
        // Check connection
        if($connection === false){
            die("Mano acho q n ta rolando aqui o  mysql :v" . mysqli_connect_error());
        }

        $sql = "SELECT id FROM usuario WHERE email='$email'";

        $result = mysqli_query($connection, $sql);

        $erro = "";

        # password hash
        $hash = password_hash($senha, PASSWORD_DEFAULT);
        
        if (mysqli_num_rows($result) > 0) {
            return false;
        }

        $sql = "INSERT INTO usuario (nome, email, senha, dataNasc) VALUES('$nome', '$email', '$hash', $dataNasc)";

        if(mysqli_query($connection, $sql)){
            return true;
        } else{
            die("deu um erro fudido ao tentar fazer o cadastro, tenta de novo sla $sql. " . mysqli_error($connection));
        }

        mysqli_close($connection);
    }
?>