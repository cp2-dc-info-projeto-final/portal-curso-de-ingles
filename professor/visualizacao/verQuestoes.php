<?php

function buscarQuestoes() {

    $connection = mysqli_connect("localhost", "root", "", "portalcursodeingles");

    // Check connection
    if($connection === false) {
        die("Erro do mysql " . mysqli_connect_error());
    }

    $sql = "SELECT idquestao, enunciado, opA, opB, opC, opD, gabarito FROM questao";

    $result = mysqli_query($connection, $sql);

    $erro = "";
    $questoes = [];
    
    if(mysqli_query($connection, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            $questao = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $questao['idquestao'] = $row['idquestao'];
                $questao['enunciado'] = $row['enunciado'];
                $questao['opA'] = $row['opA'];
                $questao['opB'] = $row['opB'];
                $questao['opC'] = $row['opC'];
                $questao['opD'] = $row['opD'];
                $questao['gabarito'] = $row['gabarito'];

                array_push($questoes, $questao);
            }
        }
    } else{
        die("Erro ao buscar questões com a consulta $sql. " . mysqli_error($connection));
    }  

    mysqli_close($connection);
    return $questoes;
}

?>