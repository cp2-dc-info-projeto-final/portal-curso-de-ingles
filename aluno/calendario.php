<?php

function buscarAlunos() {

    $connection = mysqli_connect("localhost", "root", "", "portalcursodeingles");

    // Check connection
    if($connection === false) {
        die("erro no mysql" . mysqli_connect_error());
    }

    $sql = "SELECT data_aula FROM usuario";

    $result = mysqli_query($connection, $sql);

    $erro = "";
    $aulas = [];
    
    if(mysqli_query($connection, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            $aula = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $aula['data_aula'] = $row['data_aula'];
                array_push($aulas, $aula);
            }
        }
    } else{
        die("erro no mysql $sql. " . mysqli_error($connection));
    }  

    mysqli_close($connection);
    return $aula;
}

?>