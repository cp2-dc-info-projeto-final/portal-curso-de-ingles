<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Questions</title>
</head>
<body>
<h1>Question Creation</h1>
<form action="enviarCtrl.php" method="post">
    <p>
        <label for="enunciado">Statement</label>
        <input type="text" name="enunciado" id="enunciado">
    </p>
    <p>
        <label for="opA">Option 1</label>
        <input type="text" name="opA" id="opA">
    </p>
    <p>
        <label for="opB">Option 2</label>
        <input type="text" name="opB" id="opB">
    </p>
    <p>
        <label for="opC">Option 3</label>
        <input type="text" name="opC" id="op´C">
    </p>
    <p>
        <label for="opD">Option 4</label>
        <input type="text" name="opD" id="opD">
    </p>
    <p>
        <label for="gabarito">Feedback</label>
        <input type="number" min="1" max="4" name="gabarito" id="gabarito">
    </p>

    

    <input type="submit" value="submit">

    <?php
        session_start();
        if(array_key_exists('erro', $_SESSION) == true){
            $erro = $_SESSION["erro"];
            echo "<br><b>$erro</b>";
        }
    ?>
    
</form>
</body>
</html>