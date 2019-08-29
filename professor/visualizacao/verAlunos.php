<?php

function buscarAlunos() {

    $connection = mysqli_connect("localhost", "root", "", "portalcursodeingles");

    // Check connection
    if($connection === false) {
        die("Mano acho q n ta rolando aqui o  mysql :v" . mysqli_connect_error());
    }

    $sql = "SELECT id, nome, email FROM usuario";

    $result = mysqli_query($connection, $sql);

    $erro = "";
    $alunos = [];
    
    if(mysqli_query($connection, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            $aluno = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $aluno['id'] = $row['id'];
                $aluno['nome'] = $row['nome'];
                $aluno['email'] = $row['email'];
                
                array_push($alunos, $aluno);
            }
        }
    } else{
        die("Erro ao buscar questões com a consulta $sql. " . mysqli_error($connection));
    }  

    mysqli_close($connection);
    return $alunos;
}

?>