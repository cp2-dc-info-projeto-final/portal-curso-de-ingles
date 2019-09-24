<?php

function buscarAluno() {

    $connection = mysqli_connect("localhost", "root", "", "portalcursodeingles");

    // Check connection
    if($connection === false) {
        die("ERROR" . mysqli_connect_error());
    }

    $sql = "SELECT nome, id FROM usuario";
    $verif = "SELECT tipo FROM usuario";

    $result = mysqli_query($connection, $sql);

    $erro = "";
    $alunos = [];
        
    if(mysqli_query($connection, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            if($verif==="1"){
            $usuario = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $usuario['id'] = $row['id'];
                $usuario['nome'] = $row['nome'];
                array_push($alunos, $usuario);
            }
        }
        }
    } else{
        die("Erro ao buscar alunos $sql. " . mysqli_error($connection));
    }  

    mysqli_close($connection);
    return $alunos;
}

?>