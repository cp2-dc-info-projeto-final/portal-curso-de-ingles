<?php

function buscarAlunos() {

    $connection = mysqli_connect("localhost", "root", "", "portalcursodeingles");

    // Check connection
    if($connection === false) {
        die("erro no mysql" . mysqli_connect_error());
    }

    $sql = "SELECT id, email FROM usuario";

    $result = mysqli_query($connection, $sql);

    $erro = "";
    $alunos = [];
    
    if(mysqli_query($connection, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            $aluno = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $aluno['id'] = $row['id'];
                $aluno['email'] = $row['email'];
                
                array_push($alunos, $aluno);
            }
        }
    } else{
        die("erro no mysql $sql. " . mysqli_error($connection));
    }  

    mysqli_close($connection);
    return $alunos;
}

?>